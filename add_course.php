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
                                                        <h4>Add Courses</h4>
                                                        <span>Fill below form to a Course</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Course</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add Course</a>
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
                                                        <h5>Add a venue</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_courses_p.php" method="POST">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Course Title" name="title" required>
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Course Code" name="code" required>
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Course Unit" name="unit" required>
                                                                </div>  
                                                                <label for="" class="col-sm-2 col-form-label">Select Semester</label>
                                                                <div class="col-sm-10 m-b-5">
                                                                     <select name="semester" id="" class="form-control" required>
                                                                        <?php 
                                                                            $sql= mysqli_query($db, "select * from semester");
                                                                            while($semester= $sql -> fetch_assoc()){
                                                                        ?>
                                                                        <option value="<?php echo $semester['semester_id']; ?>">
                                                                        <?php echo $semester['semester_name']?>
                                                                        </option>
                                                                        
                                                                        <?php } ?>
                                                                    </select>
                                                                </div> 
                                                                <label for="" class="col-sm-2 col-form-label">Select Department</label>
                                                                <div class="col-sm-10 m-b-5">
                                                                     <select name="dept" id="" class="form-control" required>
                                                                        <?php 
                                                                            $sql= mysqli_query($db, "select * from department order by department_name asc");
                                                                            while($dept= $sql -> fetch_assoc()){
                                                                        ?>
                                                                        <option value="<?php echo $dept['department_id']; ?>">
                                                                        <?php echo $dept['department_name']?>
                                                                        </option>
                                                                        
                                                                        <?php } ?>
                                                                    </select>
                                                                </div> 
                                                                <label for="" class="col-sm-2 col-form-label">Select Level</label>
                                                                <div class="col-sm-10 m-b-5">
                                                                     <select name="level" id="" class="form-control" required>
                                                                        <?php 
                                                                            $sql= mysqli_query($db, "select * from level");
                                                                            while($level= $sql -> fetch_assoc()){
                                                                        ?>
                                                                        <option value="<?php echo $level['level_id']; ?>">
                                                                        <?php echo $level['level_name']?>
                                                                        </option>
                                                                        
                                                                        <?php } ?>
                                                                    </select>
                                                                </div> 
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