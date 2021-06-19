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
                                        <h4>Editable Table</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Editable Table</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="page-body">
                        <!-- the table below should not be deleted, else, the next table wont work -->
                        <table  id="example-1"></table>

                        <div class="card">
                            <div class="card-header">
                                <h5>Edit venues</h5>
                                <span>Click on buttons to perform actions</span>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered table-hover nowrap" id="example-2">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>#</th>
                                                <th>Level</th>
                                                <th>Class</th>
                                                <th>Class Size</th>
                                                <th>Venue</th>
                                                <th>Venue Capacity</th>
                                                <th>Duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql =mysqli_query($db, "select * from lecture_schedule");
                                                $sn= 0;
                                                while($result = $sql -> fetch_assoc()){ 
                                                    $venue= mysqli_fetch_assoc(mysqli_query($db, "select * from venue where venue_id=".$result['venue_id']));
                                                    $combine =mysqli_fetch_assoc(mysqli_query($db, "select * from vw_lecture_details_full where combined_id=".$result['combine_id']));
                                                    $lects=explode(',', $combine['combined_list']);
                                                    $view= " ";
                                                    foreach($lects as $val){
                                                        $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                                        $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                                        $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                                                        $view.=$course['course_code'].'('.$dept['department_name'].'), ';
                                                    }
                                                    $sn++;
                                                    ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $level['level_name']; ?></td>
                                                    <td><?php echo substr($view, 0, -2); ?></td>
                                                    <td><?php echo $combine['combined_population']; ?></td>
                                                    <td><?php echo $venue['venue_name']; ?></td>
                                                    <td><?php echo $venue['capacity']; ?></td>
                                                    <td><?php echo $combine['duration']." hours"; ?></td>
                                                </tr>
                                                <?php }  ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Level</th>
                                                <th>Class</th>
                                                <th>Class Size</th>
                                                <th>Venue</th>
                                                <th>Venue Capacity</th>
                                                <th>Duration</th>
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
</div>
</div>
<?php include'footer_edit.php'; ?>