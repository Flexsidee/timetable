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
                                            <tr class="table-info">
                                                <th>#</th>
                                                <th>Staff ID</th>
                                                <th>Address</th>
                                                <th>Surname</th>
                                                <th>Firstname</th>
                                                <th>Othername</th>
                                                <th>Email</th>
                                                <th>Telephone Number</th>
                                                <th>Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql =mysqli_query($db, "select * from Lecturer");
                                                while($lecturer = $sql -> fetch_assoc()){
                                                    $address= mysqli_fetch_assoc(mysqli_query($db, "select * from adress where address_id=". $lecturer['address_id']));
                                            ?>
                                            <tr>
                                                <td><?php echo $lecturer['lecturer_id']; ?></td>
                                                <td><?php echo $lecturer['staff_id']; ?></td>
                                                <td><?php echo $address['address_name']; ?></td>
                                                <td><?php echo $lecturer['surname']; ?></td>
                                                <td><?php echo $lecturer['firstname']; ?></td>
                                                <td><?php echo $lecturer['othername']; ?></td>
                                                <td><?php echo $lecturer['email']; ?></td>
                                                <td><?php echo $lecturer['tel']; ?></td>
                                                <td><?php 
                                                        if($lecturer['gender']=="M"){
                                                            echo "Male";
                                                        }else{
                                                            echo "Female";
                                                        }
                                                ?></td>
                                            </tr>
                                                <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Staff ID</th>
                                                <th>Address</th>
                                                <th>Surname</th>
                                                <th>Firstname</th>
                                                <th>Othername</th>
                                                <th>Email</th>
                                                <th>Telephone Number</th>
                                                <th>Gender</th>
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