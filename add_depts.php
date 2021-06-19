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
                                                        <h4>Departments</h4>
                                                        <span>Fill below form to a department</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Department</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add department</a>
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
                                                        <h5>Add department</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_depts_p.php" method="POST">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Department Name" name="name" required>
                                                                </div>
                                                                <div class="col-sm-12 m-b-5">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Department e.g MASS COM, PAD " name="code" required>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-right">
                                                                <button type="submit"
                                                                    class="btn btn-primary m-r-10">Submit
                                                                    Details</button>
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