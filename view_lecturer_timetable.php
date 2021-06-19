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
                                                    $sql= mysqli_query($db, "select * from vw_lecturer_view order by surname");
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
                            <table id="basic-btnn" class="table table-striped table-hover table-bordered nowrap" style="font-size: 100%; font-weight:bold;">
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
                                        $query= mysqli_query($db, "select * from vw_lecture_schedule_full where lecturer_id ='18'");
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
        var  lecturerID=$("#class").val();
        i("class").value=lecturerID;
        i("forTable").style.display= "block";
        $('#printLink').attr('href', 'print_tt_lecturer.php?lecturerId=' + lecturerID);
    })
    </script>
    