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
                                    <h4>Lectures</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Combined Courses</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">View Combined Courses</a>
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
                                    <h5>View all the Courses you have Combined</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>#</th>
                                                    <th>Course</th>
                                                    <th>Department</th>
                                                    <th>Total Class Size</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sql =mysqli_query($db, "select * from vw_lecture_population where combined_count >1 order by combined_population desc");
                                                $sn= 0;
                                                while($lecture = $sql -> fetch_assoc()){ 
                                                    $lects=explode(',', $lecture['combined_list']);
                                                    
                                                    $sn++;
                                                    ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php 
                                                        $view= " ";
                                                        foreach($lects as $val){
                                                            
                                                            $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                                            $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                                            $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                                                            $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
                                                    }
                                                    echo substr($view, 0, -2);
                                                    
                                                    ?></td>
                                                    <td><?php echo $level['level_name']; ?></td>
                                                    <td><?php echo $lecture['combined_population']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Course</th>
                                                    <th>Department</th>
                                                    <th>Total Class Size</th>
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