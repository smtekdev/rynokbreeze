    
    
    <x-app-layout>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="admindb/assets/img/favicon.png">
    <!-- Common Styles Starts -->
    <link href="../css2-1?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="admindb/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="admindb/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="admindb/assets/css/structure.css" rel="stylesheet" type="text/css">
    <link href="admindb/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">
    <link href="admindb/plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css">
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min-1.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="admindb/assets/css/loader.css" rel="stylesheet" type="text/css">  
    <link href="admindb/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="admindb/assets/css/dashboard/dashboard_1.css" rel="stylesheet" type="text/css">
    <link href="admindb/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="admindb/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="admindb/assets/css/elements/tooltip.css" rel="stylesheet" type="text/css">
    <base href="/public">
    <!-- Page Level Plugin/Style Ends -->
</head>


<!-- must revert this  -->


<div class="vendorlg">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important; margin-top: -16%;position: relative; z-index: 10; background: white; margin-left:1%;">
</a>
</div>

    <!--  Navbar Starts  -->
    <!-- <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="">
                        <img src="admindb/assets/img/favicon.png" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="" class="nav-link">Dashboard</a>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <i class="las la-search toggle-search"></i>
                    <form class="form-inline search-full form-inline search" action="#" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search here">
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                    <a class="nav-link full-screen-mode" href="javascript:void(0);">
                        <i class="las la-compress" id="fullScreenIcon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-language"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="admindb/assets/img/flag/usa-flag.png" class="flag-width" alt="flag"> 
                            <span class="align-self-center">&nbsp;English</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="admindb/assets/img/flag/spain-flag.png" class="flag-width" alt="flag"> 
                            <span class="align-self-center">&nbsp;Spanish</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="admindb/assets/img/flag/france-flag.png" class="flag-width" alt="flag"> 
                            <span class="align-self-center">&nbsp;French</span>
                        </a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                            <img src="admindb/assets/img/flag/saudi-arabia-flag.png" class="flag-width" alt="flag"> 
                            <span class="align-self-center">&nbsp;Arabic</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-envelope"></i>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        <div class="nav-drop is-notification-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                      <span class="text-black font-12 strong">3 new mails</span>
                                      <a class="text-muted font-12" href="#">
                                        Mark all read
                                      </a>
                                </div>
                                <div class="nav-drop-body account-items pb-0">
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="user-img">
                                                <img class="rounded-circle avatar-xs" src="admindb/assets/img/profile-11.jpg" alt="profile">
                                            </div>
                                            <div class="media-body">
                                                <div class="">
                                                    <h6 class="text-primary font-13 mb-0 strong">Jennifer Queen</h6>
                                                    <p class="m-0 mt-1 font-10 text-muted">Permission Required</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item marked-read">
                                        <div class="media">
                                            <div class="user-img">
                                                <img class="rounded-circle avatar-xs" src="admindb/assets/img/profile-10.jpg" alt="profile">
                                            </div>
                                            <div class="media-body">
                                                <div class="">
                                                    <h6 class="text-primary font-13 mb-0 strong">Lara Smith</h6>
                                                    <p class="m-0 mt-1 font-10 text-muted">Invoice needed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item marked-read">
                                        <div class="media">
                                            <div class="user-img">
                                                <img class="rounded-circle avatar-xs" src="admindb/assets/img/profile-9.jpg" alt="profile">
                                            </div>
                                            <div class="media-body">
                                                <div class="">
                                                    <h6 class="text-primary font-13 mb-0 strong">Victoria Williamson</h6>
                                                    <p class="m-0 mt-1 font-10 text-muted">Account need to be synced</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <div class="text-center">
                                        <a class="text-primary strong font-13" href="#">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle position-relative" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="las la-bell"></i>
                        <div class="blink">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="nav-drop is-notification-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                      <span class="text-black font-12 strong">5 Notifications</span>
                                      <a class="text-muted font-12" href="#">
                                        Clear All
                                      </a>
                                </div>
                                <div class="nav-drop-body account-items pb-0">
                                    <a class="account-item" href="#">
                                      <div class="media align-center">
                                          <div class="icon-wrap">
                                            <i class="las la-box font-20"></i>
                                          </div>
                                          <div class="media-content ml-3">
                                              <h6 class="font-13 mb-0 strong">2 New orders placed</h6>
                                              <p class="m-0 mt-1 font-10 text-muted">10 sec ago</p>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="account-item" href="javascript:void(0)">
                                    <div class="media align-center">
                                        <div class="icon-wrap">
                                            <i class="las la-user-plus font-20"></i>
                                        </div>
                                        <div class="media-content ml-3">
                                            <h6 class="font-13 mb-0 strong">New User registered</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">5 minute ago</p>
                                        </div>
                                    </div>
                                    </a>
                                    <a class="account-item" href="#">
                                      <div class="media align-center">
                                          <div class="icon-wrap">
                                            <i class="las la-grin-beam font-20"></i>
                                          </div>
                                          <div class="media-content ml-3">
                                              <h6 class="font-13 mb-0 strong">21 Queries solved</h6>
                                              <p class="m-0 mt-1 font-10 text-muted">1 hour ago</p>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="account-item" href="javascript:void(0)">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-cloud-download-alt font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">New update available</h6>
                                                <p class="m-0 mt-1 font-10 text-muted">1 day ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <div class="text-center">
                                        <a class="text-primary strong font-13" href="#">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="admindb/assets/img/profile-16.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="nav-drop is-account-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                      <span class="text-primary font-15">Welcome Admin !</span>
                                </div>
                                <div class="nav-drop-body account-items pb-0">
                                    <a id="profile-link" class="account-item" href="#">
                                        <div class="media align-center">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img class="rounded-circle avatar-xs" src="admindb/assets/img/profile-16.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">Sara</h6>
                                                <small>Britannia</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item" href="#">
                                      <div class="media align-center">
                                          <div class="icon-wrap">
                                            <i class="las la-user font-20"></i>
                                          </div>
                                          <div class="media-content ml-3">
                                              <h6 class="font-13 mb-0 strong">My Account</h6>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="account-item" href="#">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-briefcase font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">My Activity</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item settings">
                                      <div class="media align-center">
                                          <div class="icon-wrap">
                                            <i class="las la-cog font-20"></i>
                                          </div>
                                          <div class="media-content ml-3">
                                              <h6 class="font-13 mb-0 strong">Settings</h6>
                                          </div>
                                      </div>
                                    </a>
                                    <a class="account-item" href="#">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-lock font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">Lock Screen</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a class="account-item" href="#">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-sign-out-alt font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                            <button class="btnLogin-popup">
                                            <a href="{{ route('login') }}">
                                            Login</a>
                                            </button>
                                            </div>
                                            <div class="media-content ml-3">
                                            <button class="btnLogin-popup">
                                            <a href="{{ route('register') }}">
                                            Register</a></button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row">
                <li class="nav-item dropdown header-setting">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                        <i class="las la-sliders-h"></i>
                    </a>
                </li>
            </ul>
        </header>
    </div> -->
    <!--  Navbar Ends  -->
    <!--  Main Container Starts  -->
    <div class="" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->

        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="{{ route('login') }}" data-active="true"  class="dropdown-toggle">
                            <div class="">
                                <i class="las la-home"></i>
                                <span>Dashboards</span>
                            </div>
                    </li>      

                    

                                  <!-- use below for new work -->
                    <!-- <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-file"></i>
                                <span>Option 2</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample" style="visibility: visible;">
                            <li>
                                <a href="{{ route('apps_ecommerce_categories') }}">Category List</a>
                            </li>
                            <li>
                                <a href="{{ route('apps_ecommerce_add_category') }}">Add New Category</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-drafting-compass"></i>
                                <span>Option 1</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample" style="visibility: visible;">
                            <li>
                                <a href="{{ route('apps_ecommerce_customers') }}">All Users</a>
                            </li>
                            <li>
                                <a href="{{ route('apps_ecommerce_add_customer') }}">Add New User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="lab la-elementor"></i>
                                <span>Option 2</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample" style="visibility: visible;">
                            <li>
                                <a href="{{ route('apps_ecommerce_sellers') }}">All Vendors</a>
                            </li>
                            <li>
                                <a href="{{ route('apps_ecommerce_add_vendor') }}">Add New  Vendor</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="menu">
                        <a href="{{ route('apps_ecommerce') }}" class="dropdown-toggle">
                            <div class="">
                                <i class="lab la-wpforms"></i>
                                <span>Products</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ route('apps_ecommerce_orders') }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-globe-americas"></i>
                                <span>Users</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="apps_ecommerce_refund" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-copy"></i>
                                <span>Vendors</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{url('/orders')}}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-copy"></i>
                                <span>Orders</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ route('admin-dashboard') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-chart-pie"></i>
                                <span>Profile</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        </x-app-layout>
        

    <script type="text/javascript" src="script.js"></script>
  <!-- IONICONS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        
        <!--  Sidebar Ends  -->