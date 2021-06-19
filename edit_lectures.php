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

                        <div class="card">
                            <div class="card-header">
                                <h5>Edit venues</h5>
                                <span>Click on buttons to perform actions</span>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered table-hover nowrap" id="basic-btn">
                                        <thead>
                                            <tr class="table-secondary">
                                                <th>#</th>
                                                <th>Class</th>
                                                <th>Level</th>
                                                <th>Total Class Size</th>
                                                <th>Add</th>
                                                <th>Remove</th>
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
                                                <input type="hidden" name="combined_id" value="<?php echo $lecture['combined_id']; ?>" >
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
                                                <td>
                                                    <a href="add_combine.php?combine_id=<?php echo $lecture['combined_id']; ?>"><input type="submit" value="add to list" class="btn btn-primary"></a>
                                                </td>
                                                <td>
                                                    <a href="uncombine.php?combine_id=<?php echo $lecture['combined_id']; ?>"><input type="submit" value="remove" class="btn btn-danger"></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Class</th>
                                                <th>Level</th>
                                                <th>Total Class Size</th>
                                                <th>Add</th>
                                                <th>Remove</th>
                                            </tr>
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
<?php include'footer_view.php'; ?>