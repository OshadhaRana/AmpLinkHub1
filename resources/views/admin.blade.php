@extends('admindashlayout')
@section('title', 'Admin Console')
@section('content')

<body class="with-welcome-text">
<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="/Admin">
                    <img src="/images/amplinkhub-favicon-color.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="/Admins">
                    <img src="/images/amplinkhub-favicon-color.png" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Welcome back, <span class="text-black fw-bold"></span></h1>
                    <h3 class="welcome-sub-text">AmpLinkHub performance </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 fw-medium float-start">Select category</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis fw-medium text-dark">Clients for Tire Fitment</p>
                                <p class="fw-light small-text mb-0">This is a graph representing the client to come for tire replacment</p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis fw-medium text-dark">Clients for Battery Fitment</p>
                                <p class="fw-light small-text mb-0">This is a graph representing the client to come for battery replacment</p>
                            </div>
                        </a>

                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                        <input type="text" class="form-control">
                    </div>
                </li>
                <li class="nav-item">
                    <form class="search-form" action="#">
                        <i class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-end">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                <p class="fw-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                <p class="fw-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                <p class="fw-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-mail icon-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-end">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
                                <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="Images/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="Images/face8.jpg" alt="Profile image">

                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                        <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin')}}">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">Admin</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">

                            <li class="nav-item"> <a class="nav-link" href="{{ url('createuser') }}"> Create User </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('viewuser') }}"> All Users </a></li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">Customers</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth1">
                        <ul class="nav flex-column sub-menu">


                            <li class="nav-item"> <a class="nav-link" href="{{ url('viewcustomer') }}"> View All Users </a></li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth1">
                        <ul class="nav flex-column sub-menu">


                            <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}"> View All Products </a></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                                    </li>
                                </ul>
                                <div>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Bounce Rate</p>
                                                    <h3 class="rate-percentage">32.53%</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                                                </div>
                                                <div>
                                                    <p class="statistics-title">Page Views</p>
                                                    <h3 class="rate-percentage">7,682</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                                </div>
                                                <div>
                                                    <p class="statistics-title">New Sessions</p>
                                                    <h3 class="rate-percentage">68.8</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Avg. Time on Site</p>
                                                    <h3 class="rate-percentage">2m:35s</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">New Sessions</p>
                                                    <h3 class="rate-percentage">68.8</h3>
                                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                                </div>
                                                <div class="d-none d-md-block">
                                                    <p class="statistics-title">Avg. Time on Site</p>
                                                    <h3 class="rate-percentage">2m:35s</h3>
                                                    <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 d-flex flex-column">
                                            <div class="row flex-grow">
                                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                                <div>
                                                                    <h4 class="card-title card-title-dash">Most Sold Battery Brand</h4>
                                                                    <h5 class="card-subtitle card-subtitle-dash">Best selling battery brand for the past months</h5>
                                                                </div>
                                                                <div id="performanceLine-legend"></div>
                                                            </div>
                                                            <div class="chartjs-wrapper mt-4">
                                                                <canvas id="performanceLine" width=""></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 d-flex flex-column">
                                            <div class="row flex-grow">
                                                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                    <div class="card bg-primary card-rounded">
                                                        <div class="card-body pb-0">
                                                            <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="status-summary-ight-white mb-1">Closed Value</p>
                                                                    <h2 class="text-info">357</h2>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="status-summary-chart-wrapper pb-4">
                                                                        <canvas id="status-summary"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                                        <div class="circle-progress-width">
                                                                            <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                                                        </div>
                                                                        <div>
                                                                            <p class="text-small mb-2">Total Visitors</p>
                                                                            <h4 class="mb-0 fw-bold">26.80%</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="circle-progress-width">
                                                                            <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                                                        </div>
                                                                        <div>
                                                                            <p class="text-small mb-2">Visits per day</p>
                                                                            <h4 class="mb-0 fw-bold">9065</h4>
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
                                    <div class="row">
                                        <div class="col-lg-8 d-flex flex-column">
                                            <div class="row flex-grow">
                                                <div class="col-12 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex justify-content-between align-items-start">
                                                                <div>
                                                                    <h4 class="card-title card-title-dash">Monthly Sales</h4>
                                                                    <p class="card-subtitle card-subtitle-dash">Monthly sales from tires and batteries</p>
                                                                </div>
                                                                <div>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                            <h6 class="dropdown-header">Settings</h6>
                                                                            <a class="dropdown-item" href="#">Weekly</a>
                                                                            <a class="dropdown-item" href="#">Montly</a>
                                                                            <a class="dropdown-item" href="#">Yearly</a>
                                                                            <!--<div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#">Separated link</a>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                                <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                    <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                                                    <h4 class="me-2">USD</h4>
                                                                    <h4 class="text-success">(+1.37%)</h4>
                                                                </div>
                                                                <div class="me-3">
                                                                    <div id="marketingOverview-legend"></div>
                                                                </div>
                                                            </div>
                                                            <div class="chartjs-bar-wrapper mt-3">
                                                                <canvas id="marketingOverview"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row flex-grow">
                                                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body card-rounded">
                                                            <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 fw-medium"> Change in Directors </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 fw-medium"> Other Events </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 fw-medium"> Quarterly Report </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center border-bottom py-2">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-2 fw-medium"> Change in Directors </p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex align-items-center">
                                                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list align-items-center pt-3">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-0">
                                                                        <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                    <div class="card card-rounded">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                                <h4 class="card-title card-title-dash">Activities</h4>
                                                                <p class="mb-0">20 finished, 5 remaining</p>
                                                            </div>
                                                            <ul class="bullet-line-list">
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>Just now</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                        <p>1h</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="list align-items-center pt-3">
                                                                <div class="wrapper w-100">
                                                                    <p class="mb-0">
                                                                        <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                    </p>
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
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
</body>

