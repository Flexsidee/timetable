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
                                    <h4>Assigned Venues</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Assigned Venues</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">View Assigned Venues</a>
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
                                <div class="card-header table-card-header">
                                    <h5>View all the Assigned Venues</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Venue </th>
                                                    <th>Venue Capacity</th>
                                                    <th>Total classes</th>
                                                    <th>Total Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $sql =mysqli_query($db, "select * from vw_venue_report where venue_id is not NULL order by Venue_id");
                                                    $sn= 0;
                                                    while($result = $sql -> fetch_assoc()){
                                                        $total_duration=$result['SUM(duration)']; 
                                                        $total_classes=$result['COUNT(venue_id)']; 
                                                        $venue= mysqli_fetch_assoc(mysqli_query($db, "select * from venue where venue_id=".$result['venue_id']));
                                                        $sn++;
                                                        if($total_duration>50){
                                                            $tr = "<tr class='table-danger'>";
                                                        }else{
                                                            $tr = "<tr>";
                                                        }
                                                echo $tr; ?>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $venue['venue_name']; ?></td>
                                                    <td><?php echo $venue['capacity']; ?></td>
                                                    <td><?php echo $total_classes ?></td>
                                                    <td><?php echo $total_duration; ?></td>
                                                </tr>
                                                <?php }  ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Venue </th>
                                                    <th>Venue Capacity</th>
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