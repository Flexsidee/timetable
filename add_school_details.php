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
                                                        <h4>Add School Details </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-lg-12 col-xl-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add Time Open</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_sd_p.php" method="POST">
                                                            <div class="form-group row">  
                                                                <label for="" class="col-sm-4 col-form-label">Time School opens daily</label>
                                                                <div class="col-sm-8 m-b-5">
                                                                    <input type="time" name="topen" id="" required>
                                                                </div> 
                                                                <label for="" class="col-sm-4 col-form-label">Time School closes daily</label>
                                                                <div class="col-sm-8 m-b-5">
                                                                    <input type="time" name="tclose" id="" required>
                                                                </div> 
                                                                <hr>
                                                                <label for="" class="col-sm-4 col-form-label" style="margin-top: 20px;"><b>Days Opened</b></label>
                                                                <div class="col-sm-8 m-b-5 mt-4">
                                                                    <p><input type="checkbox" name="days[]" id="" value="1"> Monday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="2"> Tuesday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="3"> Wednesday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="4"> Thursday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="5"> Friday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="6"> Saturday</p>
                                                                    <p><input type="checkbox" name="days[]" id="" value="7"> Sunday</p>
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
<?php include'footer.php'; ?>