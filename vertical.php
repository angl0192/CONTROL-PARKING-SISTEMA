<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/vuesy/layouts/layout-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 15:59:52 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Vertical | Vuesy - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                   <!-- LOGO -->
                   <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vusey</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vusey</span>
                        </span>
                    </a>

                </div>

                    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn noti-icon">
                        <i class="fa fa-fw fa-bars font-size-16"></i>
                    </button>

                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search icon-sm"></span>
                        </div>
                    </form>

         
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-block d-lg-none">
                        <button type="button" class="btn header-item noti-icon"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search icon-sm"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <form class="p-2">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                        <i class="bx bx-search search-icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                   <div class="dropdown d-inline-block language-switch">
                        <button type="button" class="btn header-item noti-icon"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">English</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell icon-sm"></i>
                            <span class="noti-dot bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-15"> Notifications </h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0);" class="small"> Mark all as read</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 250px;">
                                <h6 class="dropdown-header bg-light">New</h6>
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-3.jpg"
                                            class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Justin Verduzco</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="uil-shopping-basket"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New order has been placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h6 class="dropdown-header bg-light">Earlier</h6>
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                    <i class="uil-truck"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                            <i class="bx bx-cog icon-sm"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                            alt="Header Avatar">
                            <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                                <span class="user-name">Marie N. <i class="mdi mdi-chevron-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <h6 class="dropdown-header">Welcome Marie N!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                            <a class="dropdown-item d-flex align-items-center" href="contacts-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                            <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="auth-signout-cover.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse show verti-dash-content" id="dashtoggle">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Vertical</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">layouts</a></li>
                                        <li class="breadcrumb-item active">Vertical</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- start dash info -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card dash-header-box shadow-none border-0">
                                <div class="card-body p-0">
                                    <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                                        <div class="col">
                                            <div class="mt-md-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Campaign Sent </p>
                                                <h3 class="text-white mb-0">197</h3>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Annual Profit</p>
                                                <h3 class="text-white mb-0">$489.4k</h3>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Lead Coversation</p>
                                                <h3 class="text-white mb-0">32.89%</h3>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Sales Forecast</p>
                                                <h3 class="text-white mb-0">75.35%</h3>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Daily Average Income</p>
                                                <h3 class="text-white mb-0">$1,596.5</h3>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                                <p class="text-white-50 mb-2 text-truncate">Annual Deals</p>
                                                <h3 class="text-white mb-0">2,659</h3>
                                            </div>
                                        </div><!-- end col -->

                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <!-- end dash info -->
                </div>
            </div>

              <!-- start dash troggle-icon -->
              <div>
                <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle" aria-expanded="true" aria-controls="dashtoggle">
                    <i class="bx bx-up-arrow-alt"></i>
                </a>
            </div>
          <!-- end dash troggle-icon -->

    
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">


             <!-- LOGO -->
             <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.svg" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>

                        <li>
                            <a href="index.html">
                                <i class="bx bx-home-circle nav-icon"></i>
                                <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-applications">Applications</li>

                        <li>
                            <a href="apps-calendar.html">
                                <i class="bx bx-calendar-alt nav-icon"></i>
                                <span class="menu-item" data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <i class="bx bx-chat nav-icon"></i>
                                <span class="menu-item" data-key="t-chat">Chat</span>
                                <span class="badge rounded-pill badge-soft-danger" data-key="t-hot">Hot</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-kanban-board.html">
                                <i class="bx bxl-trello nav-icon"></i>
                                <span class="menu-item" data-key="t-kanban">Kanban Board</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-file-manager.html">
                                <i class="bx bx-folder nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">File Manager</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-shield-quarter nav-icon"></i>
                                <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="personal.php" data-key="t-products">Personal</a></li>
                                <li><a href="personal2.php" data-key="t-product-detail">Product Detail</a></li>
                                <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-mail-send nav-icon"></i>
                                <span class="menu-item" data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-book nav-icon"></i>
                                <span class="menu-item" data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="contacts-settings.html" data-key="t-user-settings">User Settings</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="apps-gallery.html">
                                <i class="bx bx-image-alt nav-icon"></i>
                                <span class="menu-item" data-key="t-gallery">Gallery</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-briefcase-alt-2 nav-icon"></i>
                                <span class="menu-item" data-key="t-projects">Projects</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="projects-grid.html" data-key="t-p-grid">Projects Grid</a></li>
                                <li><a href="projects-list.html" data-key="t-p-list">Projects List</a></li>
                                <li><a href="projects-overview.html" data-key="t-p-overview">Project Overview</a></li>
                                <li><a href="projects-create.html" data-key="t-create-new">Create New</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-layouts">Layouts</li>
                
                        <li>
                            <a href="layout-vertical.html">
                                <i class="bx bx-layout nav-icon"></i>
                                <span class="menu-item" data-key="t-verfical">Vertical</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-pages">Pages</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-user nav-icon"></i>
                                <span class="menu-item" data-key="t-authentication">Authentication</span>
                                <span class="badge rounded-pill bg-info">9</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Sign In</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signin-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signin-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signup">Sign Up</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signup-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signup-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-signout">Sign Out</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-signout-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-signout-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-lock-screen">Lock Screen</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-lockscreen-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-lockscreen-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-forgot-password">Forgot Password</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-forgotpassword-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-forgotpassword-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-reset-password">Reset Password</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-resetpassword-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-resetpassword-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-email-verification">Email Verification</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-emailverification-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-emailverification-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-2step-verification">2-step Verification</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-2step-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-2step-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-thankyou">Thank you</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="auth-thankyou-basic.html" data-key="t-basic">Basic</a></li>
                                        <li><a href="auth-thankyou-cover.html" data-key="t-cover">Cover</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-info-circle nav-icon"></i>
                                <span class="menu-item" data-key="t-error-pages">Error Pages</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="error-404-basic.html" data-key="t-error-404-basic">404 Basic</a></li>
                                <li><a href="error-404-cover.html" data-key="t-error-404-cover">404 Cover</a></li>
                                <li><a href="error-500-basic.html" data-key="t-error-500-basic">500 Basic</a></li>
                                <li><a href="error-500-cover.html" data-key="t-error-500-cover">500 Cover</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-file-blank nav-icon"></i>
                                <span class="menu-item" data-key="t-utility">Utility</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                <li><a href="pages-profile.html" data-key="t-profile">Profile</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-purchase-tag-alt nav-icon"></i>
                                <span class="menu-item" data-key="t-pricing">Pricing</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pricing-basic.html" data-key="t-basic">Basic</a></li>
                                <li><a href="pricing-table.html" data-key="t-table">Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-file nav-icon"></i>
                                <span class="menu-item" data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                <li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-award nav-icon"></i>
                                <span class="menu-item" data-key="t-timeline">Timeline</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="timeline-center.html" data-key="t-center-view">Center View</a></li>
                                <li><a href="timeline-left.html" data-key="t-left-view">Left View</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-components">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-tone nav-icon"></i>
                                <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                <li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
                                <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                <li><a href="ui-utilities.html" data-key="t-utilities">Utilities</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-customize nav-icon"></i>
                                <span class="menu-item" data-key="t-extend-ui">Extended UI</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                <li><a href="extended-sweet-alert.html" data-key="t-sweetalert">SweetAlert 2</a></li>
                                <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                <li><a href="extended-swiperslider.html" data-key="t-swiperslider">Swiper Slider</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-pencil nav-icon"></i>
                                <span class="menu-item" data-key="t-forms">Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" data-key="t-basic-elements">Basic Elements</a></li>
                                <li><a href="form-validation.html" data-key="t-validation">Validation</a></li>
                                <li><a href="form-advanced.html" data-key="t-advanced-plugins">Advanced Plugins</a></li>
                                <li><a href="form-editors.html" data-key="t-editors">Editors</a></li>
                                <li><a href="form-uploads.html" data-key="t-file-upload">File Upload</a></li>
                                <li><a href="form-wizard.html" data-key="t-wizard">Wizard</a></li>
                                <li><a href="form-mask.html" data-key="t-mask">Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-table nav-icon"></i>
                                <span class="menu-item" data-key="t-tables">Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
                                <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-bar-chart-alt-2 nav-icon"></i>
                                <span class="menu-item" data-key="t-apex-charts">Apex Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-line.html" data-key="t-line">Line</a></li>
                                <li><a href="charts-area.html" data-key="t-area">Area</a></li>
                                <li><a href="charts-column.html" data-key="t-column">Column</a></li>
                                <li><a href="charts-bar.html" data-key="t-bar">Bar</a></li>
                                <li><a href="charts-mixed.html" data-key="t-mixed">Mixed</a></li>
                                <li><a href="charts-timeline.html" data-key="t-timeline">Timeline</a></li>
                                <li><a href="charts-candlestick.html" data-key="t-candlestick">Candlestick</a></li>
                                <li><a href="charts-boxplot.html" data-key="t-boxplot">Boxplot</a></li>
                                <li><a href="charts-bubble.html" data-key="t-bubble">Bubble</a></li>
                                <li><a href="charts-scatter.html" data-key="t-scatter">Scatter</a></li>
                                <li><a href="charts-heatmap.html" data-key="t-heatmap">Heatmap</a></li>
                                <li><a href="charts-treemap.html" data-key="t-treemap">Treemap</a></li>
                                <li><a href="charts-pie.html" data-key="t-pie">Pie</a></li>
                                <li><a href="charts-radialbar.html" data-key="t-radialbar">Radialbar</a></li>
                                <li><a href="charts-radar.html" data-key="t-radar">Radar</a></li>
                                <li><a href="charts-polararea.html" data-key="t-polararea">Polararea</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-archive nav-icon"></i>
                                <span class="menu-item" data-key="t-icons">Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-unicons.html" data-key="t-unicons">Unicons</a></li>
                                <li><a href="icons-feathericons.html" data-key="t-feather-icons">Feather icons</a></li>
                                <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-map-alt nav-icon"></i>
                                <span class="menu-item" data-key="t-maps">Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-share-alt nav-icon"></i>
                                <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                            <div class="card-body pb-2">
                                <div class="d-flex align-items-start mb-4 mb-xl-0">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Invoice Overview</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-xl-4">
                                            <div class="card bg-light mb-0">
                                                <div class="card-body">
                                                    <div class="py-2">
                                                        <h5>Total Revenue:</h5>
                                                    <h2 class="mt-4 pt-1 mb-1">$9,542,00</h2>
                                                    <p class="text-muted font-size-15 text-truncate">From Jan 20,2022 to July,2022</p>

                                                    <div class="d-flex mt-4 align-items-center">
                                                        <div id="mini-1" data-colors='["--bs-success"]' class="apex-charts"></div>
                                                        <div class="ms-3">
                                                            <span class="badge bg-danger"><i class="mdi mdi-arrow-down me-1"></i>16.3%</span>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <div class="d-flex mt-2">
                                                                <i class="mdi mdi-square-rounded font-size-10 text-success mt-1"></i>
                                                                <div class="flex-grow-1 ms-2 ps-1">
                                                                    <h5 class="mb-1">3,526,56</h5>
                                                                    <p class="text-muted text-truncate mb-0">Net Profit</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="d-flex mt-2">
                                                                <i class="mdi mdi-square-rounded font-size-10 text-primary mt-1"></i>
                                                                <div class="flex-grow-1 ms-2 ps-1">
                                                                    <h5 class="mb-1">5,324,85</h5>
                                                                    <p class="text-muted text-truncate mb-0">Net Revenue</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    </div>

                                    <div class="col-xl-8">
                                    <div>
                                        <div id="column_chart" data-colors='["--bs-primary", "--bs-primary-rgb, 0.2"]' class="apex-charts" dir="ltr"></div>  
                                    </div>
                                </div>
                                </div>

                            </div>

                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-2">Order Stats</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="chart-donut" data-colors='["--bs-primary", "--bs-success","--bs-danger"]' class="apex-charts" dir="ltr"></div>

                                    <div class="mt-1 px-2">
                                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-primary me-2"></i>Order Completed</p>
                                            <div>
                                                <span class="pe-5">56,236</span>
                                                <span class="badge bg-primary"> + 0.2% </span>
                                            </div>
                                        </div>
                                        <div class="order-wid-list d-flex justify-content-between border-bottom">
                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Order Processing</p>
                                            <div>
                                                <span class="pe-5">12,596</span>
                                                <span class="badge bg-success"> - 0.7% </span>
                                            </div>
                                        </div>
                                        <div class="order-wid-list d-flex justify-content-between">
                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Order Cancel</p>
                                            <div>
                                                <span class="pe-5">1,568</span>
                                                <span class="badge bg-danger"> + 0.4% </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="card-title mb-2">Sales By Social Source</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                                        </a>
            
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Yearly</a>
                                                            <a class="dropdown-item" href="#">Monthly</a>
                                                            <a class="dropdown-item" href="#">Weekly</a>
                                                            <a class="dropdown-item" href="#">Today</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="mt-3 pt-1">
                                                <div class="social-box row align-items-center border-bottom pt-0 g-0">
                                                    <div class="col-12 col-sm-5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <div class="avatar-title rounded bg-primary">
                                                                        <i class="mdi mdi-facebook font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Facebook Ads</h5>
                                                                <p class="text-muted mb-0">Shoes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-3">
                                                        <div class="mt-3 mt-md-0 text-md-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">4,562 Sale</h5>
                                                            <p class="text-muted mb-0 text-truncate">4.2k Like</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto col-sm-4">
                                                        <div class="mt-3 mt-md-0 text-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">$47,526.00</h5>
                                                            <p class="text-muted mb-0">
                                                                <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>50%</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="social-box row align-items-center border-bottom g-0">
                                                    <div class="col-12 col-sm-5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <div class="avatar-title rounded bg-info">
                                                                        <i class="mdi mdi-twitter font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Twitter Ads</h5>
                                                                <p class="text-muted mb-0">T-shirt</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-3">
                                                        <div class="mt-3 mt-md-0 text-md-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">1,652 Sale</h5>
                                                            <p class="text-muted mb-0 text-truncate">3.7k Like</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto col-sm-4">
                                                        <div class="mt-3 mt-md-0 text-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">$52,785.00</h5>
                                                            <p class="text-muted mb-0">
                                                                <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>45%</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="social-box row align-items-center border-bottom g-0">
                                                    <div class="col-12 col-sm-5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <div class="avatar-title rounded bg-danger">
                                                                        <i class="mdi mdi-linkedin font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">linkedin Ads</h5>
                                                                <p class="text-muted mb-0">Watch</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-3">
                                                        <div class="mt-3 mt-md-0 text-md-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">5,256 Sale</h5>
                                                            <p class="text-muted mb-0 text-truncate">3.3k Like</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto col-sm-4">
                                                        <div class="mt-3 mt-md-0 text-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">$52,785.00</h5>
                                                            <p class="text-muted mb-0">
                                                                <span class="badge bg-danger"><i class="mdi mdi-arrow-bottom-right me-1"></i>30%</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="social-box row align-items-center border-bottom g-0">
                                                    <div class="col-12 col-sm-5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <div class="avatar-title rounded bg-danger">
                                                                        <i class="mdi mdi-youtube font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Youtube Ads</h5>
                                                                <p class="text-muted mb-0">Chairs</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-3">
                                                        <div class="mt-3 mt-md-0 text-md-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">6,965 Sale</h5>
                                                            <p class="text-muted mb-0 text-truncate">3.7k Like</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto col-sm-4">
                                                        <div class="mt-3 mt-md-0 text-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">$86,456.00</h5>
                                                            <p class="text-muted mb-0">
        
                                                                <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>35%</span>
        
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="social-box row align-items-center border-bottom g-0">
                                                    <div class="col-12 col-sm-5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar">
                                                                    <div class="avatar-title rounded bg-primary">
                                                                        <i class="mdi mdi-instagram font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Instagram Ads</h5>
                                                                <p class="text-muted mb-0">Chairs</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-3">
                                                        <div class="mt-3 mt-md-0 text-md-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">8,532 Sale</h5>
                                                            <p class="text-muted mb-0 text-truncate">4.2k Like</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto col-sm-4">
                                                        <div class="mt-3 mt-md-0 text-end">
                                                            <h5 class="font-size-15 mb-1 text-truncate">$92,452.00</h5>
                                                            <p class="text-muted mb-0">
        
                                                                <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>35%</span>
        
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body pb-1">
                                          <div class="d-flex align-items-start">
                                              <div class="flex-grow-1">
                                                  <h5 class="card-title mb-2">Product Traking</h5>
                                              </div>
                                              <div class="flex-shrink-0">
                                                  <div class="dropdown">
                                                      <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          <span class="text-muted">View All<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                      </a>
                              
                                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                          <a class="dropdown-item" href="#">Members</a>
                                                          <a class="dropdown-item" href="#">New Members</a>
                                                          <a class="dropdown-item" href="#">Old Members</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
          
                                          <div class="mx-n4 px-4" data-simplebar style="height: 258px;">
                                                <div class="mt-3">
                                                    <ol class="activity-checkout mb-0 mt-2 ps-3">
                                                            <li class="checkout-item crypto-activity">
                                                                <div class="avatar checkout-icon">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        <i class="mdi mdi-cart text-white font-size-17"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-item-list">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                                            <h5 class="font-size-15 mb-1 text-truncate">Have 5 pending order.</h5>
                                                                            <p class="text-truncate text-muted mb-2">Delivered</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 text-end">
                                                                            <h5 class="mb-1 font-size-15">Nov 02</h5>
                                                                            <p class="text-muted mb-0">6 hour ago</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="checkout-item crypto-activity">
                                                                <div class="avatar checkout-icon">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        <i class="mdi mdi-gift text-white font-size-17"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-item-list">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                                            <h5 class="font-size-15 mb-1 text-truncate">New Order Received</h5>
                                                                            <p class="text-truncate text-muted mb-2">Pick Up</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 text-end">
                                                                            <h5 class="mb-1 font-size-15">Nov 03</h5>
                                                                            <p class="text-muted mb-0">1 day ago</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="checkout-item crypto-activity">
                                                                <div class="avatar checkout-icon">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        <i class="mdi mdi-account text-white font-size-17"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-item-list">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                                            <h5 class="font-size-15 mb-1 text-truncate">Manager Posted</h5>
                                                                            <p class="text-truncate text-muted mb-2">In Transit</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 text-end">
                                                                            <h5 class="mb-1 font-size-15">Nov 03</h5>
                                                                            <p class="text-muted mb-0">Yesterday</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="checkout-item crypto-activity">
                                                                <div class="avatar checkout-icon">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        <i class="mdi mdi-wallet text-white font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-item-list">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                                            <h5 class="font-size-15 mb-1 text-truncate">Have 1 pending order.</h5>
                                                                            <p class="text-truncate text-muted mb-2">2 hour ago</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 text-end">
                                                                            <h5 class="mb-1 font-size-15">Nov 04</h5>
                                                                            <p class="text-muted mb-0">6 hour ago</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="checkout-item crypto-activity">
                                                                <div class="avatar checkout-icon">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        <i class="mdi mdi-weight text-white font-size-20"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-item-list">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                                            <h5 class="font-size-15 mb-1 text-truncate">Order Received</h5>
                                                                            <p class="text-truncate text-muted mb-2">Received</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 text-end">
                                                                            <h5 class="mb-1 font-size-15">Nov 04</h5>
                                                                            <p class="text-muted mb-0">Today</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                    </ol>
                                                </div>
                                           </div>
          
                                          <div id="chart-area" data-colors='["--bs-primary"]' class="apex-charts"></div>
          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Best Selling Product</h5>
                                        </div>
                                    </div>

                                    <div class="slider mt-4">
                                        <!-- Add Pagination -->
                                        <div class="swiper-button-next"><i class="mdi mdi-arrow-right"></i></div>
                                        <div class="swiper-button-prev"><i class="mdi mdi-arrow-left"></i></div>
                                        
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card dash-product-box shadow-none border mb-0">
                                                        <div class="card-body">
                                                            <div class="pricing-badge">
                                                                <span class="badge bg-success">Sale</span>
                                                            </div>
                                                           <div class="dash-product-img">
                                                             <img src="assets/images/product/img-1.png" class="img-fluid" alt="">
                                                           </div>
    
                                                            <h5 class="font-size-17 mt-1">
                                                                <a href="ecommerce-product-detail.html" class="text-dark lh-base">Stylish Cricket & Walking Light Weight Shoes</a>
                                                            </h5>
    
                                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$280</del> $140.00</h5>
    
                                                            <div class="font-size-16">
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                                            </div>
    
                                                            <div class="mt-4">
                                                                <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="swiper-slide">
                                                    <div class="card dash-product-box shadow-none border mb-0">
                                                        <div class="card-body">
                                                            <div class="dash-product-img">
                                                                <img src="assets/images/product/img-2.png" class="img-fluid" alt="">
                                                              </div>
       
                                                               <h5 class="font-size-17 mt-1">
                                                                   <a href="ecommerce-product-detail.html" class="text-dark lh-base">Combo Pack of 2 Sports Shoes Running Shoes</a>
                                                               </h5>
       
                                                               <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$320</del> $280.00</h5>
       
                                                               <div class="font-size-16">
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                               </div>
       
                                                               <div class="mt-4">
                                                                   <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                                       Now</a>
                                                               </div>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="swiper-slide">
                                                    <div class="card dash-product-box shadow-none border mb-0">
                                                          <div class="card-body">
                                                            <div class="dash-product-img">
                                                                <img src="assets/images/product/img-3.png" class="img-fluid" alt="">
                                                              </div>
       
                                                               <h5 class="font-size-17 mt-1">
                                                                   <a href="ecommerce-product-detail.html" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                                               </h5>
      
                                                               <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>
      
                                                               <div class="font-size-16">
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star-half-full text-warning"></i>
                                                               </div>
       
                                                               <div class="mt-4">
                                                                   <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                                       Now</a>
                                                               </div>
                                                          </div>
                                                     </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="card dash-product-box shadow-none border mb-0">
                                                          <div class="card-body">
                                                            <div class="dash-product-img">
                                                                <img src="assets/images/product/img-6.png" class="img-fluid" alt="">
                                                              </div>
       
                                                               <h5 class="font-size-17 mt-1">
                                                                   <a href="ecommerce-product-detail.html" class="text-dark lh-base">Sneakers For Women Sports Running Shoes (Blue)</a>
                                                               </h5>
      
                                                               <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$530</del> $420.00</h5>
      
                                                               <div class="font-size-16">
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star text-warning"></i>
                                                                   <i class="mdi mdi-star-half-full text-warning"></i>
                                                               </div>
       
                                                               <div class="mt-4">
                                                                   <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                                       Now</a>
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
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                           <div class="card">
                               <div class="card-body pb-0">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Sales Revenue</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Year:</span> <span
                                                        class="text-muted">2022<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">2019</a>
                                                    <a class="dropdown-item" href="#">2020</a>
                                                    <a class="dropdown-item" href="#">2021</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div id="world-map-markers" style="height: 230px;"></div>
                                    </div>

                                    <div>
                                        <div id="sales-countries" class="apex-charts" dir="ltr"></div>
                                    </div>
                               </div>
                           </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body pb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-2">Recent Orders</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                                </a>
    
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table project-list-table table-nowrap align-middle table-borderless mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 210px">Customer</th>
                                                        <th scope="col" style="width: 140px">Product Name</th>
                                                        <th scope="col">Order ID</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Stock</th>
                                                        <th scope="col">Trend</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1">Neal Matthews</div>
                                                            </div>
                                                        </td>
                                                        <td>Office Chair</td>
                                                        <td>
                                                          <span>#526552</span>
                                                        </td>
                                                        <td>
                                                            $210.00
                                                        </td>
                                                        <td>
                                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                                        </td>
                                                        <td>
                                                            <div id="chart-sparkline1" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Print</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1">Connie Franco</div>
                                                            </div>
                                                        </td>
                                                        <td>Black T-shirt</td>
                                                        <td>
                                                            <span>#746648</span>
                                                        </td>
                                                        <td>
                                                            $150.00
                                                        </td>
                                                        <td>
                                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                                        </td>
                                                        <td>
                                                            <div id="chart-sparkline2" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Print</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1">Paul Reynolds</div>
                                                            </div>
                                                        </td>
                                                        <td>Smart Watch</td>
                                                        <td>
                                                            <span>#125635</span>
                                                        </td>
                                                        <td>
                                                          $260.00
                                                        </td>
                                                        <td>
                                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Out Of Stock</p>
                                                        </td>
                                                        <td>
                                                            <div id="chart-sparkline3" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Print</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1">Ronald Patton</div>
                                                            </div>
                                                        </td>
                                                        <td>Apple Phone</td>
                                                        <td>
                                                            <span>#236521</span>
                                                        </td>
                                                        <td>
                                                            $170.00
                                                        </td>
                                                        <td>
                                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                                        </td>
                                                        <td>
                                                            <div id="chart-sparkline4" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Print</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1"> Adella Perez</div>
                                                            </div>
                                                        </td>
                                                        <td>New Shoes</td>
                                                        <td>
                                                            <span>#236521</span>
                                                            
                                                        </td>
                                                        <td>
                                                            $240.00
                                                        </td>
                                                        <td>
                                                            <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Out Of Stock</p>
                                                        </td>
                                                        <td>
                                                            <div id="chart-sparkline5" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Print</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> &copy; Vuesy.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div id="sidebar-setting">
                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>
            </div>

                <h6 class="mt-4 mb-3">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- swiper js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesdesign.in/vuesy/layouts/layout-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 15:59:52 GMT -->
</html>