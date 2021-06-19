<?php include'header.php'; ?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

    <div class="main-body">
                <div class="row">

                    <div class="col-lg-12 col-xl-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h4>Select Level to view timetable</h4>
                            </div>
                            <div class="card-block">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Select Lecturer</label>
                                        <div class="col-sm-10 m-b-5">
                                                <select name="class" id="class" class="form-control" required>
                                                <option value="0">Select</option>
                                                <?php 
                                                    $sql= mysqli_query($db, "select * from lecturer");
                                                    while($lecturer= $sql -> fetch_assoc()){
                                                ?>
                                                <option value="<?php echo $lecturer['lecturer_id']; ?>">
                                                <?php echo $lecturer['surname'];?>
                                                </option>
                                                
                                                <?php } ?>
                                            </select>
                                        </div> 
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" id="viewTimetable" 
                                            class="btn btn-primary m-r-10">View timetable</button>
                                    </div>
                                </div>
                            </div>
                        <div id="forTable" class="dt-responsive table-responsive">
                            <table id="basic-btnn" class="table table-striped table-hover table-bordered nowrap" style="font-size: 60%; text-align:center;">
                                <thead>
                                    <th>Days</th>
                                    <th>Level</th>
                                    <th>Dept</th>
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
                            <a class="btn btn-primary" id="printLink">Print Timetable</a>
                        </div>                           
                        
                    </div>
                    
            </div>

        </div>
    </div>

    
</div>
</div>
</div>
</div>
</div>
</div>
<?php include'footer_view.php' ?>

<script>
    <?php include'show_days.php'; ?>
    lects=[];
    depts=[]
    i = elem => {
        return document.getElementById(elem);
    }
    //$("#Table").style.display= "none";
    i("forTable").style.display= "none";
    $('#viewTimetable').click(function(){
        i("forTable").style.display= "block";
        var  lecturerID=$("#class").val();
        $('#printLink').attr('href', 'print_tt_lecturer.php?lecturerId=' + $("#class").val());
 //alert(JSON.stringify())
show(lecturerID);
})
    $(function(e){
      sendData('pull_timetable.php', {}).then(resp=>{
          //console.log(resp);
            resp['period'].map(re=>{
                    re.view.map(vw=>{
                        lects.push({day:re.day, from:re.start_time, to:re.end_time, duration:re.duration,dept_code:vw.dept_code, class_id:vw.class_id, course_code:vw.course_code,lecturer_id:re.lecturer_id , surname:re.surname, tel:re.tel, firstname:re.firstname, address_name:re.address_name, venue_name:re.venue_name})
                    });
                });
                depts=resp['dept'];
        })
    })
    function show(lecturerId){
        lecturer= lects.filter(lect=>{return lect.lecturer_id==lecturerId});
        i('tbody').innerHTML='';
        days.map(dy=>{
                    depts.map(dept=>{
                    lects_day=lecturer.filter(lect=>{return lect.day==dy.day && lect.class_id==dept.class_id});
                    tr='<tr><td>'+dy.day_name+'</td><td>'+dept.level_name+'</td><td>'+dept.dept_code+'</td>';
                    skip=0;
                    for(n=8; n<18; n++){
                        lr=lects_day.filter(l=>{return (l.from==n)});
                        if(lr.length>0){
                            skip=lr[0].duration-1;
                            tr+='<td colspan="'+lr[0].duration+'">'+lr[0].course_code+' '+lr[0].surname+' '+lr[0].venue_name+'<br/>'+lr[0].tel+'</td>';
                        }else if(skip==0){
                            tr+='<td></td>';
                        }else if(skip>0){
                            skip--;
                        }
                    }
                    tr+='</tr>';
                    i('tbody').innerHTML+=tr;
                    
                    })
                    
                })

    }
    </script>
    