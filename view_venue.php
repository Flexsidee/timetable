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
                                    <li class="breadcrumb-item"><a href="#!">Venues</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">View Venues</a>
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
                                    <h5>View all the venue you have added</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btn" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr class="table-success">
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <!-- <th>Area (m<sup>2</sup>)</th> -->
                                                    <th>Student Capacity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $sn=0;
                                                    $sql =mysqli_query($db, "select * from venue");
                                                    while($venue = $sql -> fetch_assoc()){ 
                                                        $sn++; ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $venue['venue_name']; ?></td>
                                                    <!-- <td><?php #echo $venue['area']; ?></td> -->
                                                    <td><?php echo $venue['capacity']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <!-- <th>Area</th> -->
                                                    <th>Student Capacity</th>
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