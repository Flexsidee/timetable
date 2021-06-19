<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Remove a course from the rest of the grouped courses</h5>
                                </div>
                                <table class="table table-striped table-hover table-bordered nowrap">
                                    <thead>
                                        <th>Individual courses</th>
                                        <th>Remove Course</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $combined_id=$_GET['combine_id'];
                                            $query=mysqli_query($db, "select * from vw_lecture_details_full where combined_id='$combined_id'");
                                            while($lecture = $query -> fetch_assoc()){ 
                                                $lects=explode(',', $lecture['combined_list']);
                                        ?>
                                                <?php 
                                                    $view= " ";
                                                    $sn=0;
                                                    foreach($lects as $val){ 
                                                        $sn++;
                                                        $fm="formData".$sn;
                                                        ?>
                                                        <form action="actions/uncombine_p.php" method="POST" id="<?php echo $fm; ?>"><?php
                                                        $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                                        $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                                        $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); ?>
                                                        <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                                                        <input type="hidden" name="combined_id" value="<?php echo $_GET['combine_id']; ?>">
                                                        <!-- <input type="hidden" name="course_code" value="<?php #echo $course['course_code']; ?>">
                                                        <input type="hidden" name="dept_code" value="<?php #echo $dept['dept_code']; ?>"> -->
                                                        <?php 
                                                        $view.="<tr><td>".$course['course_code'].'('.$dept['dept_code'].') '."</td><td><input type='button' value='remove from list' onclick='return remove(\"". $fm ."\")' class='btn btn-danger'></td></tr>"; ?>
                                                        </form><?php
                                                    }
                                                    echo $view;
                                                }?>
                                            
                                    </tbody>
                                    <tfoot>
                                        <th>Individual courses</th>
                                        <th>Remove Course</th>
                                    </tfoot>
                                </table>
                            </div>
                              <button class="btn btn-info" onclick="goBack()" style="padding: 10px 40px;">Go Back To Previous Page</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function goBack(){
        history.back();
    }
    function remove(fm){
        if(confirm("Are you sure you want to remove this department from the class?")){
            document.getElementById(fm).submit();
        }else{
            
        }
        return false;
    }
</script>
<?php include'footer_view.php'; ?>
