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
                                                        <h4>Add Venue</h4>
                                                        <span>Fill below form to a venue</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Venue</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add Venue</a>
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
                                                        <h5>Add a venue</h5>
                                                    </div>
                                                    <form action="actions/add_venue_p.php" method="POST">
                                                        <div class="card-block">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12 m-b-5">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Venue Name" name="name" required>
                                                                    </div>
                                                                    <div class="col-sm-12 m-b-5">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Length of the venue (in meters)" name="length" required>
                                                                    </div>
                                                                    <div class="col-sm-12 m-b-5">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Width of the venue (in meters)" name="width" required>
                                                                    </div>
                                                                </div>
                                                                <p><input type="radio" name="exclusive" id="" value="0"> General Venue
                                                                <input type="radio" name="exclusive" id="" value="1"> Exclusive Venue</p>                             
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
                                                    </form>
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