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
                                                        <h4>Add Lecturer</h4>
                                                        <span>Fill below form to add a lecturer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Lecturer</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add Lecturer</a>
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
                                                        <h5>Add a lecturer</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_lecturers_p.php" method="POST">
                                                            <div class="form-group row">
                                                                <!-- <div class="col-sm-6 m-b-5">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Staff ID" name="staff_id" required>
                                                                </div> -->
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Surname" name="sname" required>
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="email" class="form-control"
                                                                        placeholder="Email Address" name="email" >
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Bank Name" name="bank_name" >
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Account Number" name="acct_number" minlength="10" maxlength="10">
                                                                </div>
                                                                <!-- <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Firstname" name="fname" required>
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Othername" name="oname" required>
                                                                </div> -->
                                                                <div class="col-sm-6 m-b-5">
                                                                    <input type="tel" class="form-control"
                                                                        placeholder="Telephone number e.g 07000000000" name="tel" minlength="11" maxlength="15">
                                                                </div>
                                                                <!-- <div class="col-sm-6 m-b-5">
                                                                    <select name="address" id="" class="form-control" required>
                                                                        <option value="">Select Address</option>
                                                                        <?php 
                                                                            // $sql= mysqli_query($db, "select * from adress");
                                                                            // while($add = $sql -> fetch_assoc()){ ?>
                                                                                <option value="<?php echo $add['address_id']; ?>"><?php echo $add['address_name']; ?></option>
                                                                            <?php //} ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6 m-b-5">
                                                                    <select name="gender" id="" class="form-control" required>
                                                                        <option value="">Select Gender</option>
                                                                        <option value="M">Male</option>
                                                                        <option value="F">Female</option>
                                                                    </select>
                                                                </div> -->
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