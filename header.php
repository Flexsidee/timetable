<?php include'db_conn.php';  
$venues=mysqli_fetch_array(mysqli_query($db, "select * from lecture_schedule"));
$timetable=mysqli_fetch_array(mysqli_query($db, "select * from lecture_schedule where day is NULL"));
session_start();
if(isset($_SESSION['username'])){
	$user_id = @$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Timetable Harmonizer</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Used to automatically generate timetable for an instituition">
    <meta name="keywords"
        content="">
    <meta name="Timetable Harmonizer" content="Used to automatically generate timetable for an instituition">

    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <link href="files/assets/font.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" href="files/bower_components/select2/css/select2.min.css" />

    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    
    <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
    <script>
        function deleteVenuesAssigned(){
            const del = confirm('Are you sure you want to delete all the assigned venues');
            if(del) location.href = 'actions/delete_assigned_venues.php?del=yes';
        }
        function deleteTimetable(){
            const del =confirm('Are you sure you want to delete the timetable');
            if(del) location.href = 'actions/delete_timetable.php?del=yes';
        }
    </script>
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.html">
                            <!-- <img class="img-fluid" src="files/assets/images/logo.png" alt="Theme-Logo" /> -->
                            <p style="font-size: 110%; margin-top:10px;">Timetable Harmonizer</p>
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i
                                        class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i
                                        class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                data-cf-modified-9e48e1a26941acf09bc14589-="">
                                <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                            <?php 
                                //button for deleting all assigned venues
                                if(empty($venues)){
                                    echo " ";
                                }else if(empty($timetable)){
                                    echo " ";
                                }else{
                                    echo'<li class="header-notification">
                                            <button style="border-radius: 15px;" class="btn btn-danger" onclick="deleteVenuesAssigned()">Delete Assigned Venues</button>
                                        </li>';
                                }
                                
                                //button for deleted the timetable without deleting assigned venues
                                if(!empty($timetable) || empty($venues)){
                                    echo " ";
                                }else{
                                    echo'<li class="header-notification">
                                            <button style="border-radius: 15px;" class="btn btn-danger" onclick="deleteTimetable()">Delete Timetable</button>
                                        </li>';
                                }
                             ?>
                             </li>
                            </li>
                        </ul>
                         <ul class="nav-right">
                             <li class="header-notification">
                                 <a href="home.php" class="text text-primary">Home</a>
                             </li>
                            <li class="header-notification">
                                <a href="logout.php" class="text text-danger">logout</a>
                            </li>
                        </ul> 
                    </div>
                </div>
            </nav>

            <!-- Dashboard starts -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Details</div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                    <?php 
                                        if(!empty($venues)){
                                            echo " ";
                                        }else{
                                            include'add_and_edit_links.php';
                                        }
                                    ?>
                                        
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">View Saved Data</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="view_venue.php">
                                                    <span class="pcoded-mtext">View Venues</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_depts.php">
                                                    <span class="pcoded-mtext">View Departments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_course.php">
                                                    <span class="pcoded-mtext">View Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_lecturers.php">
                                                    <span class="pcoded-mtext">View Lecturers</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_classes.php">
                                                    <span class="pcoded-mtext">View Classes</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_lectures.php">
                                                    <span class="pcoded-mtext">View Combined Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_lecture_details.php">
                                                    <span class="pcoded-mtext">View Lecture Details</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_venues_assigned.php">
                                                    <span class="pcoded-mtext">View Venues Assigned</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="view_lecturers_report.php">
                                                    <span class="pcoded-mtext">View Lecturers Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php 
                                $sql=mysqli_fetch_array(mysqli_query($db, "select * from lecture_details"));
                                if(empty($sql)){
                                    echo " ";
                                }else if(!empty($venues)){
                                    echo " ";
                                }else{
                                    echo'<div class="pcoded-navigatio-lavel">Process</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="">
                                            <a href="assign_venue.php">
                                                <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                <span class="pcoded-mtext">Auto Assign Venues</span>
                                            </a>
                                        </li>';
                                } 
                                if(empty($venues)){
                                    echo " ";
                                }else if(empty($timetable)){
                                    echo " ";
                                }else{
                                    echo'<div class="pcoded-navigatio-lavel">Process</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="">
                                            <a href="process_timetable.php">
                                                <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                <span class="pcoded-mtext">Harmonze Timetable</span>
                                            </a>
                                        </li>
                                    </ul>
                                    </div>';
                                }
                                if(!empty($timetable) || empty($venues)){
                                    echo " ";
                                }else{
                                    include'view_timetable_links.php';
                                }
                            ?>
                            
                    </nav>
                    <?php }else{
		header("location: index.php");
	} ?>