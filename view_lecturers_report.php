<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h5>View the number of courses taken by each lecturer</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Lecturer</th>
                                                    <th>Total classes</th>
                                                    <th>Total Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $sql =mysqli_query($db, "select * from vw_lecturer_view order by surname");
                                                    $sn= 0;
                                                    while($result = $sql -> fetch_assoc()){
                                                        $total_duration=$result['SUM(duration)']; 
                                                        $total_clasess=$result['COUNT(lecturer_id)']; 
                                                        $venue= mysqli_fetch_assoc(mysqli_query($db, "select * from venue where venue_id=".$result['venue_id']));
                                                        $sn++; ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $result['surname']; ?></td>
                                                    <td><?php echo $total_clasess;?></td>
                                                    <td><?php echo $total_duration; ?></td>
                                                </tr>
                                                <?php }  ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Lecturer</th>
                                                    <th>Total classes</th>
                                                    <th>Total Duration</th>
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