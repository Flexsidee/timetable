<?php include'db_conn.php';  
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

            <!-- <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                    title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius"
                                            src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe" data-toggle="tooltip" data-placement="left"
                                    title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
                                    data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
                                    data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
                                    data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="files/assets/images/avatar-3.jpg"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- Dashboard starts -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Details</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Fill Forms</span>
                                    </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="add_venues.php">
                                                    <span class="pcoded-mtext">Add Venues</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_depts.php">
                                                    <span class="pcoded-mtext">Add Departments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_lecturer.php">
                                                    <span class="pcoded-mtext">Add Lecturer</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_school_details.php">
                                                <span class="pcoded-mtext">Add School Detials</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_course.php">
                                                    <span class="pcoded-mtext">Add Course</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_class.php">
                                                    <span class="pcoded-mtext">Add Class</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_lecture.php">
                                                    <span class="pcoded-mtext">Combine Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="add_lecture_details.php">
                                                <span class="pcoded-mtext">Add Lecture Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Edit Forms</span>
                                    </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="edit_venue.php">
                                                    <span class="pcoded-mtext">Edit Venues</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_levels.php">
                                                    <span class="pcoded-mtext">Edit Levels</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_breaks.php">
                                                    <span class="pcoded-mtext">Edit Breaks</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_depts.php">
                                                    <span class="pcoded-mtext">Edit Departments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lecturer.php">
                                                    <span class="pcoded-mtext">Edit Lecturer</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_school_details.php">
                                                <span class="pcoded-mtext">Edit School Detials</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_course.php">
                                                    <span class="pcoded-mtext">Edit Course</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_classes.php">
                                                    <span class="pcoded-mtext">Edit Class</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lectures.php">
                                                    <span class="pcoded-mtext">Edit Combine Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lecture_details.php">
                                                <span class="pcoded-mtext">Edit Lecture Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Views</span>
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
                                    <!-- <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Edit</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="edit_venue.php">
                                                    <span class="pcoded-mtext">Edit Venues</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_depts.php">
                                                    <span class="pcoded-mtext">Edit Departments</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_course.php">
                                                    <span class="pcoded-mtext">Edit Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lecturers.php">
                                                    <span class="pcoded-mtext">Edit Lecturers</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_classes.php">
                                                    <span class="pcoded-mtext">Edit Classes</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lectures.php">
                                                    <span class="pcoded-mtext">Edit Combined Courses</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_lecture_details.php">
                                                    <span class="pcoded-mtext">Edit Lecture Details</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="edit_venues_assigned.php">
                                                    <span class="pcoded-mtext">Edit Venues Assigned</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            <?php 
                                $sql=mysqli_fetch_array(mysqli_query($db, "select * from lecture_details"));
                                if(empty($sql)){
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
                                $venues=mysqli_fetch_array(mysqli_query($db, "select * from lecture_schedule"));    
                                if(empty($venues)){
                                    echo " ";
                                }else{
                                    echo'
                                        <li class="">
                                            <a href="process_timetable.php">
                                                <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                <span class="pcoded-mtext">Harmonze Timetable</span>
                                            </a>
                                        </li>
                                    </ul>';
                                    $set_tt=mysqli_fetch_array(mysqli_query($db, "select * from lecture_schedule where day is NULL"));
                                    if(!empty($set_tt)){
                                        echo " ";
                                    }else{
                                        echo'
                                        <div class="pcoded-navigatio-lavel">View Timetable</div>
                                            <ul class="pcoded-item pcoded-left-item">
                                                <li class="">
                                                    <a href="view_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">General Timetable</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="view_day_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">By Day of the week</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="view_level_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext"> By Level</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="view_full_dept_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext"> By Department Timetable</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="view_dept_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">By Class Timetable</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="view_lecturer_timetable.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">By Lecturer</span>
                                                    </a>
                                                </li>
                                                <li class=""> 
                                                    <a href="AI_data.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">Data For AI</span>
                                                    </a>
                                                </li>
                                                <li class=""> 
                                                    <a href="lecturer_payment.php">
                                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                                        <span class="pcoded-mtext">Data for Lecturers Payment</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>';}
                                }
                                }
                            ?>
                            
                    </nav>
                    <?php }else{
		header("location: index.php");
	} ?>