<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Bootstrap Admin HRMS</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/hrmslogo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
<a href="javascript:void(0);" id="toggle_btn">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>




<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i data-feather="bell"></i> <span class="badge badge-pill"></span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<div class="avatar avatar-sm">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profile.jpg" alt="">
<span class="status online"></span>
</span>
<span>Kavin Hansen</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div class="sidebar-contents">
<div id="sidebar-menu" class="sidebar-menu">
<div class="mobile-show">
<div class="offcanvas-menu">
<div class="user-info align-center bg-theme text-center">
<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
<a href="javascript:void(0)" class="d-block menu-style text-white">
<div class="user-avatar d-inline-block mr-3">
<img src="assets/img/profiles/avatar-18.jpg" alt="user avatar" class="rounded-circle" width="50">
</div>
</a>
</div>
</div>
<div class="sidebar-input">
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>
</div>
</div>
<ul>
<li>
<a href="index.html"><img src="assets/img/home.svg" alt="sidebar_img"> <span>Dashboard</span></a>
</li>
<li>
<a href="employee.html"><img src="assets/img/employee.svg" alt="sidebar_img"><span> Employees</span></a>
</li>
<li>
<a href="company.html"><img src="assets/img/company.svg" alt="sidebar_img"> <span> Company</span></a>
 </li>
<li>
<a href="calendar.html"><img src="assets/img/calendar.svg" alt="sidebar_img"> <span>Calendar</span></a>
</li>
<li>
<a href="leave.html"><img src="assets/img/leave.svg" alt="sidebar_img"> <span>Leave</span></a>
</li>
<li>
<a href="review.html"><img src="assets/img/review.svg" alt="sidebar_img"><span>Review</span></a>
</li>
<li>
<a href="report.html"><img src="assets/img/report.svg" alt="sidebar_img"><span>Report</span></a>
</li>
<li>
<a href="manage.html"><img src="assets/img/manage.svg" alt="sidebar_img"> <span>Manage</span></a>
</li>
<li>
<a href="settings.html"><img src="assets/img/settings.svg" alt="sidebar_img"><span>Settings</span></a>
</li>
<li class="active">
<a href="profile.html"><img src="assets/img/profile.svg" alt="sidebar_img"> <span>Profile</span></a>
</li>
</ul>
<ul class="logout">
<li>
<a href="profile.html"><img src="assets/img/logout.svg" alt="sidebar_img"><span>Log out</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="breadcrumb-path mb-3">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-2" alt="breadcrumb">Home</a>
</li>
<li class="breadcrumb-item active"> Profile</li>
</ul>
<h3>Profile	</h3>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-3">
<div class="head-link-set">
<ul>
<li><a href="profile.html">Employement</a></li>
<li><a href="profile-detail.html">Detail</a></li>
<li><a href="#" class="active">Document</a></li>
<li><a href="profile-payroll.html">Payroll</a></li>
<li><a href="profile-timeoff.html">Timeoff</a></li>
<li><a href="profile-review.html">Reviews</a></li>
<li><a href="profile-setting.html">Settings</a></li>
</ul>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 mb-3">
<div class="row">
<div class="col-xl-12 col-sm-6 col-12 ">
<div class="card">
<div class="card-header">
<h2 class="card-titles">Payroll Details</h2>
</div>
<div class="card-body">
<div class="member-date">
<ul>
<li>
<label>Add Bank Name</label>
<a class="edit-link"><i data-feather="edit"></i> </a>
</li>
<li>
<label>Add Bank Account Number</label>
<a class="edit-link"><i data-feather="edit"></i> </a>
</li>
<li>
<label>Add Bank Sort Code</label>
<a class="edit-link"><i data-feather="edit"></i> </a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-12 col-sm-12 col-12 ">
<div class="row">
<div class="col-xl-4 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">Basic Information</h2>
<ul>
<li><a class="plus"><i data-feather="plus"></i></a></li>
<li><a class="delete"><i data-feather="trash-2"></i></a></li>
</ul>
</div>
<div class="card-body">
<div class="member-info">
<ul>
<li>
<label>Bank Name</label>
<span>Life Essence Banks, Inc.</span>
</li>
<li>
<label>Bank Account Number</label>
 <span>112300987652</span>
</li>
<li>
<label>Bank Sort Code</label>
<span>LE00652</span>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">P45</h2>
</div>
<div class="card-body">
<div class="member-date">
<ul>
<li class="border-0 px-0">
<label><img src="assets/img/pdf.png" alt="pdf" class="mr-3" />Passport.pdf</label>
<a class="edit-link"><i data-feather="edit"></i> </a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-12 col-12 d-flex">
<div class="card card-lists flex-fill">
<div class="card-header">
<h2 class="card-titles">P45</h2>
</div>
<div class="card-body">
<div class="member-date">
<ul>
<li>
<label>Current Salary</label>
<a class="edit-link"><i data-feather="edit"></i> </a>
</li>
</ul>
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


<div class="customize_popup">
<div class="modal fade" id="adddocument" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Add Document</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class=" col-md-12 p-0">
<div class=" form-popup">
<label>Document Description</label>
<input type="text">
</div>
<div class=" form-popup">
<div class="file-uploads">
<label for="upload_img">
<input type="file" id="upload_img" />
<span>Upload</span>
</label>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Add</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>