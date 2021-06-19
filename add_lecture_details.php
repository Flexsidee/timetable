<?php include'header.php'; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Add Lecture Details</h4>
                                                        <span>Fill below form to add a lecture details</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Lecture Details</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add Lecture Details</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-lg-12 col-xl-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add a Lecture Details</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_lecture_details_p.php" method="POST">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-2 col-form-label">Select Lectures</label>
                                                            <div class="col-sm-10 m-b-5">
                                                                <select name="combined" id="" class="form-control" required>
                                                                    <?php 
                                                                    $sql =mysqli_query($db, "select * from vw_lecture_details_full where LDID is NULL order by combined_count desc");
                                                                    while($lecture = $sql -> fetch_assoc()){ 
                                                                        $lects=explode(',', $lecture['combined_list']);
                                                                        $view= " ";
                                                                        foreach($lects as $val){
                                                                            $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                                                            $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                                                            $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                                                                            $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
                                                                    }
                                                                    
                                                                    ?>
                                                                    <option value="<?php echo $lecture['combined_id']; ?>">
                                                                    <?php echo substr($view, 0, -2)." ".$level['level_name'].", ".$course['course_unit']."units"; ?>
                                                                    </option>
                                                                    
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <label for="" class="col-sm-2 col-form-label">Select Lecturer</label>
                                                                <div class="col-sm-10 m-b-5">
                                                                     <select name="lecturer" id="" class="form-control" required>
                                                                        <?php 
                                                                            $sql= mysqli_query($db, "select * from lecturer order by surname asc");
                                                                            while($lecturer= $sql -> fetch_assoc()){
                                                                                //$address=mysqli_fetch_assoc(mysqli_query($db, "select * from adress where address_id=".$lecturer['address_id']));
                                                                        ?>
                                                                        <option value="<?php echo $lecturer['lecturer_id']; ?>">
                                                                        <?php echo $lecturer['surname']; ?>
                                                                        </option>
                                                                        
                                                                        <?php } ?>
                                                                    </select>
                                                                </div> 
                                                            <label for="" class="col-sm-2 col-form-label">Add Duration</label>
                                                                <div class="col-sm-10 m-b-5">
                                                                    <select name="duration" id="" class="form-control" required>
                                                                        <option value="1">1 hour</option>
                                                                        <option value="2">2 hours</option>
                                                                        <option value="3">3 hours</option>
                                                                        <option value="4">4 hours</option>
                                                                    </select>
                                                                </div>
                                                                    
                                                            <div class="form-group row">
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-right">
                                                                <button type="submit"
                                                                    class="btn btn-primary m-r-10">Submit
                                                                    Details</button>
                                                                <button type="submit"
                                                                    class="btn btn-default">Reset</button>
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
            </div>
        </div>
    </div>
<?php include'footer.php'; ?>