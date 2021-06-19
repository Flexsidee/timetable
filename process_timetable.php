<?php include'header.php'; ?>
<script lang="javascript" type="text/javascript" src="fmUpload.js"></script>

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
                <div class="page-header">
                    <div class="card card-body">
                        <a href="#" id="btnBegin" class="btn btn-primary">Begin</a>
                        <div id="cont-out" class="dt-responsive table-responsive">
                                <table id="basic-btnnn" class="table table-hover table-bordered nowrap" style="font-size: 60%; text-align:center;">
                                    <thead>
                                        <th>Days</th>
                                        <th>Level</th>
                                        <th>Department</th>
                                        <th>8-9</th>
                                        <th>9-10</th>
                                        <th>10-11</th>
                                        <th>11-12</th>
                                        <th>12-1</th>
                                        <th>1-2</th>
                                        <th>2-3</th>
                                        <th>3-4</th>
                                        <th>4-5</th>
                                        <th>5-6</th>
                                    </thead>
                                    <tbody id='tbody'>
                                    </tbody>
                                </table>
                            <div>
                                <button id="save" onclick="return saveTimetable()" class="btn btn-success">Save</button>
                            </div>
                            <div id='out-test'></div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include'footer.php'; ?>
<script type="text/javascript">
i = elem => {
        return document.getElementById(elem);
}
i('cont-out').style.display="none";
lects=[];
send=[];
async function process_save(){
    while(send.length>0){
        period=send.shift();
        resp= await sendData('save_timetable.php', {period});
    }
    alert("Operation completed");
    location.replace('view_timetable.php');
}
function saveTimetable(){
    process_save();
    return false
 }
 $(function(){

    function render(lectures){
      out='<table id="basic-btn" class="table table-striped table-hover table-bordered nowrap"><thead><tr><th>#</th><th>Day</th><th>Period</th><th>Class</th><th>Lecturer</th><th>Venue</th></tr></thead><tbody>';
      out+=lectures.map((lect, inv)=>"<tr><td>"+(inv+1)+"</td><td>"+lect.day+"</td><td>"+lect.from+" - "+lect.to+"</td><td></td><td>"+lect.lecture.surname +"</td><td>"+lect.lecture.tel +"</td><td>"+lect.lecture.venue_name+"</td></tr>").join('');
     out+='</tbody></table>';
     return out;
 }

 

    $("#btnBegin").click(function(){
        i('cont-out').style.display="block";
         for(x=0; x<1; x++){
            sendData("main_process.php", {LectureIndex:x}).then(resp=>{
                //console.log(resp);
                <?php include'show_days.php'; ?>
                send=resp['period'];
            days.map(dy=>{

                resp['period'].map(re=>{
                    re.lecture.view.map(vw=>{
                        lects.push({day:re.day, from:re.from, to:re.to, duration:re.lecture.duration,dept_code:vw.dept_code, class_id:vw.class_id, course_code:vw.course_code, surname:re.lecture.surname, tel:re.lecture.tel, firstname:re.lecture.firstname, address_name:re.lecture.address_name, venue_name:re.lecture.venue_name})
                    });
                });
                resp['dept'].map(dept=>{
                lects_day=lects.filter(lect=>{return lect.day==dy.day && lect.class_id==dept.class_id});
                tr='<tr><td>'+dy.day_name+'</td><td>'+dept.level_name+'</td><td>'+dept.dept_code+'</td>';
                skip=0;
                for(n=8; n<18; n++){
                    lr=lects_day.filter(l=>{return (l.from==n)});
                    if(lr.length>0){
                        skip=lr[0].duration-1;
                        tr+='<td colspan="'+lr[0].duration+'">'+lr[0].course_code+' '+lr[0].surname+' '+lr[0].venue_name+'<br/>'+lr[0].tel+'</td>';
                    }else if(skip==0){
                        br=resp['breaks'].filter(brk=>{return brk.day==dy.day && brk.start_time==n});
                        if(br.length>0){
                            tr+='<td>'+br[0].break_title+'</td>';
                        }else{
                            tr+='<td></td>';
                        }
                    }else if(skip>0){
                        skip--;
                    }
                }
                tr+='</tr>';
                i('tbody').innerHTML+=tr;

                })
            })

                // i("out-test").innerHTML=JSON.stringify(lects_day);
                //lects_day.map(lect=>{
                    //i("cont-out").innerHTML+=JSON.stringify(lect)+'<hr/>';
                //})
                //resp['dept'].map(department=>{
                    //lects[]=resp['period'].filter(pr=>{return (pr.lecture.view.filter(vw=>{ return (vw.level_id==department.level_id && vw.dept_code==department.dept_code)}).length>0) });                    
                    //i("cont-out").innerHTML+=JSON.stringify(lects)+'<hr/>';  
                //})
                //alert(JSON.stringify(lects));
                //i("cont-out").innerHTML=render(resp['period']);
                //i("cont-out").innerHTML=JSON.stringify(resp);
            }).catch(err=>{
//                alert(err);
                i("cont-out").innerHTML=err;
            })

   //         $("#cont-out").load("process_timetable_p.php",  {}, function(a){
             
   //         })
   
         }
         return false;
     })
 })
</script>

