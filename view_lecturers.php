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
                                    <h4>Lecturers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Lecturers</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">View Lecturers</a>
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
                                    <h5>View all the Departments you have</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr class="table-info">
                                                    <th>#</th>
                                                    <!--<th>Staff ID</th>
                                                    <th>Address</th> -->
                                                    <th>Surname</th>
                                                    <th>Bank Name</th>
                                                    <th>Account Number</th>
                                                    <!-- <th>Firstname</th>
                                                    <th>Othername</th>-->
                                                    <th>Email Address</th>
                                                    <th>Telephone Number</th>
                                                    <!-- <th>Gender</th>  -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $sn = 0;
                                                    $sql =mysqli_query($db, "select * from lecturer order by surname asc");
                                                    while($lecturer = $sql -> fetch_assoc()){
                                                        $sn ++;
                                                        // $address= mysqli_fetch_assoc(mysqli_query($db, "select * from adress where address_id=". $lecturer['address_id']));
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <!-- <td><?php #echo $lecturer['staff_id']; ?></td> -->
                                                    <!-- <td><?php #echo $address['address_name']; ?></td> -->
                                                    <td><?php echo $lecturer['surname']; ?></td>
                                                    <td><?php if(is_null($lecturer['bank_name']) || empty($lecturer['bank_name'])){
                                                            echo "N/A";
                                                        }else{
                                                            echo $lecturer['bank_name'];
                                                        } ?>
                                                    </td> 
                                                    <td><?php if(is_null($lecturer['acct_number']) || empty($lecturer['acct_number'])){
                                                            echo "N/A";
                                                        }else{
                                                            echo $lecturer['acct_number'];
                                                        } ?>
                                                    </td> 
                                                    <!-- <td><?php #echo $lecturer['firstname']; ?></td>
                                                    <td><?php #echo $lecturer['othername']; ?></td>-->
                                                    <td><?php if(is_null($lecturer['email']) || empty($lecturer['email'])){
                                                            echo "N/A";
                                                        }else{
                                                            echo $lecturer['email'];
                                                        } ?>
                                                    </td>  
                                                    <td><?php if(is_null($lecturer['tel']) || empty($lecturer['tel'])){
                                                            echo "N/A";
                                                        }else{
                                                            echo $lecturer['tel'];
                                                        } ?>
                                                    </td> 
                                                    <!-- <td><?php 
                                                            // if($lecturer['gender']=="M"){
                                                            //     echo "Male";
                                                            // }else{
                                                            //     echo "Female";
                                                            // }
                                                    ?></td> -->
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Staff ID</th>
                                                    <!-- <th>Address</th> -->
                                                    <th>Surname</th>
                                                    <th>Bank Name</th>
                                                    <th>Account Number</th>
                                                    <!-- <th>Firstname</th>
                                                    <th>Othername</th>
                                                    <th>Email</th>
                                                    <th>Telephone Number</th>
                                                    <th>Gender</th> -->
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