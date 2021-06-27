<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">


                <div class="page-body">
                    <div class="row">

                        <div class="col-lg-12 col-xl-12">
                            <?php 
                                if(isset($_GET['tt']) == 'clr') echo'<p style="font-size: 120%" class="alert alert-danger">The timetable has been cleared</p>';
                                if(isset($_GET['vns']) == 'clr') echo'<p style="font-size: 120%" class="alert alert-danger">The assigned venues has been cleared</p>';
                            ?>
                            <div class="card">
                            <div class="card-header">
                                <p class="alert alert-primary">Follow these steps below to be able to use the program to generate timetable for the school</p>
                                <h4>Steps To Follow</h4>
                                </div>
                                <div class="card-block">
                                    <p style="font-weight: bold;">Add all necessary details</p>
                                        <ol>
                                            <li>Add all venues</li>
                                            <li>Add all Departments</li>
                                            <li>Add all Courses(e.g MTH111, GNS11)</li>
                                            <li>Add all Lecturers</li>
                                            <li>Add department population</li>
                                            <li>Add combine courses</li>
                                            <li>Assigne lecturers to courses and add course duration</li>
                                        </ol>
                                    <p style="font-weight: bold;">Venues</p>
                                        <ol>
                                            <li>Manually Assign courses to venues (laboraties in particular)</li>
                                            <li>Automatically assign all remaining courses to venues</li>
                                            <li>If ok with result save, if not, expand the venue size with the buttons then save.</li>
                                        </ol>
                                    <p style="font-weight: bold;">Timetable</p>
                                        <ol>
                                            <li>Auto generate timetable</li>
                                            <li>Save result</li>
                                            <li>View General Timetable or view timetable by department</li>
                                        </ol>
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