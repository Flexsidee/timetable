<?php
session_start();
$semester=$_SESSION['semester'];
class lecture_venue{
    var $lecture, $venue;
    function __construct($lecture, $venue)
    {
        $this->lecture=$lecture;
        $this->venue=$venue;
    }
}
class availability{
    var $periods;
    function add_period($period){
        $this->periods[]=$period;
    }
    function check_availability($period, $breaks){
        if(in_array($period->day,array_keys($breaks))){
            foreach($breaks[$period->day] as $br){
                $int=array_intersect(range($br['start_time'], $br['end_time']-1), range($period->from, $period->to));
                if(count($int)){
                    return count($int);
                }
            }
    
        }
//        print_r($period);
        foreach($this->periods as $pr){
            if($pr->day==$period->day){
                $int=array_intersect(range($pr->from, $pr->to-1), range($period->from, $period->to));
                if(count($int)){
                    return count($int);
                }
            }
        }
        return 0;
    }
}
class period{
    var $period_id, $day, $from, $to, $lecture, $lecturer_id, $venue;
    function __construct($period_id, $day, $from, $lecture)
    {

        $this->period_id=$period_id;
        $this->day=$day;
        $this->from=$from;
        $this->to=$from + $lecture["duration"];
        $this->lecture=$lecture;
    }
}
class lecturer_schedule extends availability{
    var $lecturer_id;
    function __construct($lecturer_id)
    {
        $this->lecturer_id=$lecturer_id;
        $this->periods=array();
    }
}

class class_schedule extends availability{
    var $class_id;
    function __construct($class_id)
    {
        $this->class_id=$class_id;
        $this->periods=array();
    }
}
class view{
    var $class_id, $level_id, $dept_code, $course_code;
    function __construct($course)
    {
        $this->class_id=$course['class_id'];
        $this->dept_code=$course['dept_code'];
        $this->level_id=$course['level_id'];
        $this->course_code=$course['course_code'];
    }
}
class timetable{
    var $cnt_lectures, $cnt_venues, $lecture, $ven_util, $venue, $lectures, $venues, $lecture_venues, $hours_per_day, $days_per_week, $periods, $lecturer_schedules, $obj_data, $cap_expansion;
    function __construct($con="where venue_id is null order by combined_population desc")
    {

$semester=$_SESSION['semester'];
        include'db_conn.php';
        $total_days=mysqli_fetch_assoc(mysqli_query($db, "select total_days from schol_open_details"));
        $days_sql= $total_days['total_days'];
        $total_hours=mysqli_fetch_assoc(mysqli_query($db, "select total_hours from schol_open_details"));
        $hours_sql= $total_hours['total_hours'];
        $this->lecturer_schedules=array();
        $this->hours_per_day=$hours_sql;
        $this->days_per_week=$days_sql;
        $this->cap_expansion=1;

$semester=$_SESSION['semester'];
        include'db_conn.php';
        $fetch_lecture= mysqli_query($db, "SELECT * FROM `vw_lecture_schedule_full` ".$con);
        $this->lectures=array();
        $fetch_venue= mysqli_query($db, "SELECT * FROM `venue` where exclusive =0 order by capacity");
        $this->venues = array();
        while($rec = mysqli_fetch_assoc($fetch_lecture)){
           $lects=explode(',', $rec['combined_list']);
            $view= array();
            foreach($lects as $val){
                $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                //$dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                $view[]=new view($course);
            }
            $rec['view']=$view;
            $this->lectures[]=$rec;
 
         if(!in_array($rec['lecturer_id'], array_keys($this->lecturer_schedules))){
            $this->lecturer_schedules[$rec['lecturer_id']]=new lecturer_schedule($rec['lecturer_id']);
        }
        }
        while($rec= mysqli_fetch_assoc($fetch_venue)){
            $this->venues[]=$rec;
            $this->ven_util[$rec["venue_name"]]=0;
        }
        $this->cnt_lectures=count($this->lectures);
        $this->cnt_venues=count($this->venues);                        
    }
    function assign_period(){
        $breaks=array();
        
$semester=$_SESSION['semester'];
        include'db_conn.php';
        $res= mysqli_query($db, "SELECT * FROM `breaks`");
        while($rec=mysqli_fetch_assoc($res)){
            $brks[]=$rec;
         $breaks[$rec['day']][]=$rec;
        }
        
        $lect_ven=$this->lectures;
        $vs=array();
        foreach($lect_ven as $lv){
            $vs[$lv["venue_id"]][]=$lv;
        }

$semester=$_SESSION['semester'];
        include'db_conn.php';
        $resp=mysqli_query($db, "select * from vw_department_full where 1 order by class_id");
        $dept=array();
        $class_schedules=array();
        while($row=mysqli_fetch_assoc($resp)){
            $class_schedules[$row['class_id']]=new class_schedule($row['class_id']);
            $dept[]=$row;
        }


        //$cnt=count($lect_ven);
        //$set=0;
        $period_id=1;
        $this->obj_data=array();
        foreach($vs as $venue_id=>$v){
            $from=8;
            $day=1;
            $from_lim=18;
            $day_lim=3;
            while(count($v)){   
                $vcnt=count($v);
                $skipped=[];
                foreach($v as $index=> $cd){
                    if($from > $from_lim){
                        $from=8;
                        $day+=1;
                    }
                    if($day > $day_lim){
                        $from=8;
                        $day=1;
                    }

                    $lect=$cd;
                    $period=new period($period_id, $day, $from, $lect);
                    $dept_is_available=1;
                    $err=array();
                    foreach($lect['view'] as $vw){
                        if($class_schedules[$vw->class_id]->check_availability($period, $breaks)){
                            $dept_is_available=0;
                            $err[]=$vw;
                        }
                    }
                    if(!$this->lecturer_schedules[$cd['lecturer_id']]->check_availability($period, $breaks) && $dept_is_available){
                        $this->lecturer_schedules[$cd['lecturer_id']]->add_period($period);
                        foreach($lect['view'] as $vw){
                            $class_schedules[$vw->class_id]->add_period($period);
                        }
        

                        $period_id++;
                        $this->obj_data['period'][]=$period;
//                        echo 'from--'.$from;
                        if(($vcnt-1) > $index){
                            if(($from+$cd['duration'] + $v[$index + 1]['duration']) <= 16){
                                $from+=$cd['duration'];
                            }else{
                                $from=8;
                                $day+=1;
                            }    
                        }
                        else{
                            $from=8;
                            $day+=1;
                        }
                        if($day>2){
                            $from=8;
                            $day=1;
                        }
//                        echo '<hr>from--'.$from;

                    }else{
                        //echo "<h2>Skipped</h2>";
                        $skipped[]=$cd;
                    }
        
                }
                $v=$skipped;
                $from++;
            }
        }
        $this->obj_data['dept']=$dept;
        $this->obj_data['breaks']=$brks; 
        echo json_encode($this->obj_data);

    }
    function assign_all_venues(){
        $this->lecture_venues=array();
        foreach($this->lectures as $lecture){
            $this->assign_venue($lecture);
        }
    }
    function assign_venue($lecture){
        $this->venue=array();
        for($c=0; $c < $this->cnt_venues; $c++){
            //i increased the venue capacity a lil here
            $actual_venue_capacity =$this->venues[$c]["capacity"];
            $capacity_to_use = $actual_venue_capacity * $this->cap_expansion; // increased the venue capacity by 20%
            
            $temp=$this->venues[$c];
            //used to compare venue with the population
            if(($lecture["combined_population"] <= $capacity_to_use) && (($lecture['duration'] + $this->ven_util[$temp['venue_name']])<= 50)){
                //used to check if it has been assigned 
                if(count($this->venue)){
                    //this is used to compare if the utilisation of the last venue is more than the current venue thats looping currently
                    if($this->ven_util[$this->venue['venue_name']] > $this->ven_util[$temp['venue_name']]){
                        //if the utilisation is smaller it will assign the current venue its looping
                        $this->venue=$this->venues[$c];
                    }    
                }else{
                    $this->venue=$this->venues[$c];            
                }
            }
        }
        if(count($this->venue)){
            $this->lecture_venues[]=new lecture_venue($lecture, $this->venue);
            $venue_name=$this->venue['venue_name'];
            $this->ven_util[$venue_name] += $lecture['duration'];
            return $this->venue;            
        }
        else{
            return 0;
        } 
    }
}
?>
