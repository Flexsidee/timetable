<style>
    table{
        width: 100%;
    }
    table,tr,td,th{
        border: 2px black solid; 
        border-collapse: collapse;
        font-weight: bold;
        font-size: 100%;
    }
    td,th{
        padding: 10px;
    }
</style>
<div id="forTable" class="dt-responsive table-responsive">
<table>
        <thead>
            <th>#</th>
            <th>Surname</th>
            <th>Days</th>
            <th>Time</th>
            <th>Venue</th>
            <th>Level</th>
            <th>Class</th>
        </thead>
        <tbody >
            <?php 
                $sn =0;
                include'db_conn.php';              
                $query= mysqli_query($db, "select * from vw_lecture_schedule_full where lecturer_id ='".$_GET['lecturerId']."'");
                while($lecture = $query -> fetch_assoc()){
                    $lects= explode(',', $lecture['combined_list']);
                    $sn++;
            ?>
            <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $lecture['surname']; ?></td>
                <td><?php 
                        if($lecture['day']==1){
                            echo "Saturday";
                        }elseif ($lecture['day']==2) {
                            echo "Friday";
                        }else{
                            echo "Thursday";
                        }
                    ?>
                </td>
                <td><?php echo $lecture['start_time']." - ".$lecture['end_time']; ?></td>
                <td><?php echo $lecture['venue_name']; ?></td>
                <td><?php echo $lecture['level_name']; ?></td>
                <td>
                    <?php 
                        $view= " ";
                        foreach($lects as $val){
                            $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                            $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                            $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                            $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
                        }
                            echo substr($view, 0, -2);  
                    ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>    
    <div>
        <button onclick="goBack()" style="color: white; background: blue; padding: 10px 20px; margin-top: 10px; border:none; border-radius: 5px;">Go to Previous Page</button>
    </div>
</div> 

<?php include'footer_view.php'; ?>
<script>
function goBack(){
    history.back();
}
$(function(e){
    print();
    //window.location.replace("view_lecturer_timetable.php");
})
</script>