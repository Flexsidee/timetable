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
                                    <h4>Venues</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Courses</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">View Courses</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="card">
                                <div class="card-header">
                                    <h5>View all the courses you have added</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr class="table-info">
                                                    <th>#</th>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Course Unit</th>
                                                    <th>Semester</th>
                                                    <th>Department</th>
                                                    <th>Level</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sn=1;
                                                    $sql =mysqli_query($db, "select * from course");
                                                    while($course = $sql -> fetch_assoc()){
                                                        $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from department where department_id=".$course['department_id']));
                                                        $semester=mysqli_fetch_assoc(mysqli_query($db, "select * from semester where semester_id=".$course['semester_id'])); 
                                                        $level=mysqli_fetch_assoc(mysqli_query($db, "select * from level where level_id=".$course['level_id'])); 
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn++;?></td>
                                                    <td><?php echo $course['course_code']; ?></td>
                                                    <td><?php echo $course['course_title']; ?></td>
                                                    <td><?php echo $course['course_unit']; ?></td>
                                                    <td><?php echo $semester['semester_name']; ?></td>
                                                    <td><?php echo $dept['department_name']; ?></td>
                                                    <td><?php echo $level['level_name']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Course Unit</th>
                                                    <th>Semester</th>
                                                    <th>Department</th>
                                                    <th>Level</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
<?php include'footer_view.php'; ?>