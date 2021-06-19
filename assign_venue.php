<?php include'header.php'; ?>
<script src='fmUpload.js' type="text/javascript"></script>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Assign Venues</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Form</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Assign Venues</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-body">
                    <div class="row">

                        <div class="col-lg-12 col-xl-12">
                            <div id="manual_assign">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Assign a venue to a particular class</h5>
                                </div>
                                <div class="card-block">
                                    <form action="actions/assign_venue_p.php" method="POST">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Select Level</label>
                                            <div class="col-sm-10 m-b-5">
                                                <select name="course" id="level" class="form-control" required>
                                                    <option value="0">Select</option>
                                                    <?php 
                                                                        $sql= mysqli_query($db, "select * from level");
                                                                        while($level= $sql -> fetch_assoc()){
                                                                    ?>
                                                    <option value="<?php echo $level['level_id']; ?>">
                                                        <?php echo $level['level_name'];?>
                                                    </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <label for="" class="col-sm-2 col-form-label">Select Course</label>
                                            <div class="col-sm-10 m-b-5">
                                                <select name="combine" id="course" class="form-control" required>
                                                    <option value="0">Select</option>

                                                </select>
                                            </div>
                                            <label for="" class="col-sm-2 col-form-label">Select Venue</label>
                                            <div class="col-sm-10 m-b-5">
                                                <select name="venue" id="level" class="form-control" required>
                                                    <option value="0">Select</option>
                                                    <?php 
                                                        //$sql= mysqli_query($db, "select * from venue order by venue_name");
                                                        $sql= mysqli_query($db, "select * from venue where exclusive =1 ORDER BY venue_name");
                                                        while($venue= $sql -> fetch_assoc()){
                                                    ?>
                                                    <option value="<?php echo $venue['venue_id']; ?>">
                                                        <?php echo $venue['venue_name']." with capacity of ".$venue['capacity']." students";?>
                                                    </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-12 text-right">
                                                    <button type="submit" class="btn btn-primary m-r-10">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                    <div class="card card-body">
                                        <h5>Automatically ssign Venues to all the classes</h5>
                                        <a href="#" id="btnBegin" onclick="return processVenue(1)" class="btn btn-primary">Auto Assign Venues</a>
                                    </div>
                                </div>

                            <div class="card" id="display">
                                <div class="card-header"></div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-striped table-bordered table-hover nowrap"
                                            id="basic-btn">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Level</th>
                                                    <th>Class</th>
                                                    <th>Class Size</th>
                                                    <th>Venue</th>
                                                    <th>Venue Capacity</th>
                                                    <th>Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody id="assigned_bod">

                                            </tbody>
                                        </table>
                                        <div class="col-sm-12 text-right">
                                            <button type="submit" onclick="return save()" id="btnSave" class="btn btn-success m-r-10">Save</button>
                                        </div>
                                        <div class="card-footer">
                                            <h3 class="text-center">Increase venue capacity by</h3>
                                                <button type="submit" onclick="return processVenue(1.00)" class="btn btn-info">0%</button>
                                                <button type="submit" onclick="return processVenue(1.05)" class="btn btn-info">5%</button>
                                                <button type="submit" onclick="return processVenue(1.10)" class="btn btn-info"> 10%</button>
                                                <button type="submit" onclick="return processVenue(1.15)" class="btn btn-info"> 15%</button>
                                                <button type="submit" onclick="return processVenue(1.20)" class="btn btn-info"> 20%</button>
                                                <button type="submit" onclick="return processVenue(1.25)" class="btn btn-info"> 25%</button>
                                                <button type="submit" onclick="return processVenue(1.30)" class="btn btn-info"> 30%</button>
                                                <button type="submit" onclick="return processVenue(1.35)" class="btn btn-info"> 35%</button>
                                                <button type="submit" onclick="return processVenue(1.40)" class="btn btn-info"> 40%</button>
                                                <button type="submit" onclick="return processVenue(1.45)" class="btn btn-info"> 45%</button>
                                                <button type="submit" onclick="return processVenue(1.50)" class="btn btn-info"> 50%</button>
                                                <button type="submit" onclick="return processVenue(1.55)" class="btn btn-info"> 55%</button>
                                                <button type="submit" onclick="return processVenue(1.60)" class="btn btn-info"> 60%</button>
                                                <button type="submit" onclick="return processVenue(1.65)" class="btn btn-info"> 65%</button>
                                                <button type="submit" onclick="return processVenue(1.70)" class="btn btn-info"> 70%</button>
                                                <button type="submit" onclick="return processVenue(1.75)" class="btn btn-info"> 75%</button>
                                                <button type="submit" onclick="return processVenue(1.80)" class="btn btn-info"> 80%</button>
                                            
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
<script>
    dt = {
        level_id: 0
    };
    combined = [];
    load_course = [];
    i = elem => {
        return document.getElementById(elem);
    }
    i('display').style.display="none";//hide the empty table for the assigned tables when the table first loads
    saved_data= [];
    function processVenue(exp){
        sendData('process_venue.php', {cap_expansion:exp}).then(resp => {
            saved_data= resp;
            console.log(resp);
            i('manual_assign').style.display = "none"; //hide the manual assign after automatically loading 
            i('display').style.display="block"; //show the result of the auto assignment
            i('assigned_bod').innerHTML = resp.map((lect, inv) => "<tr'><td>" + (inv + 1) + "</td><td>" +
                    lect.lecture.level_name + "</td><td width='200' style='{width: 30px !important}'>" + lect.lecture.view.map(vw=>vw.course_code+"("+vw.dept_code+")").join(' ') + "</td><td>" + lect
                    .lecture.combined_population + "</td><td>" + lect.venue.venue_name + "</td><td>" +
                    lect.venue.capacity + "</td><td>" + lect.lecture.duration + " hours</td></tr>")
                .join('');
        }).catch(err => {
            alert("Error--- " + err);
        });
        return false;
    }
    async function processSave(){
        while(saved_data.length){
            rec=saved_data.shift();
            resp=await sendData('save_all_venues.php', {data:rec});
        }
        alert('Auto assigning completed successfully');
        location.replace('view_venues_assigned.php');

    }
function save(){
        processSave();
        return false;
    }
    function getCourses() {
        if (dt.level_id > 0) {
            sendData('ajax_classes.php', dt).then(resp => {
                load_course = resp;
                //console.log(resp);
                i("course").innerHTML = "<option value='0'>--Select--</option>"
                i("course").innerHTML += resp.map(cr => "<option value='" + cr.combine + "'>" + cr.view + " ." + cr.population + " students." +"</option>").join(" ");
            });
        }
    }
    i("level").addEventListener('change', function (e) {
        dt.level_id = this.value;
        getCourses();
    }, false);
    $(function (e) {
        //        i("OK");
        //alert("OK");
    })
</script>