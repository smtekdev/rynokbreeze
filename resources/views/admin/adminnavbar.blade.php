    
    
    <x-app-layout>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Rynokbay Admin Dashboard</title>
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



    <!--  Main Container Starts  -->
    <div class="" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->

        <div class="sidebar-wrapper sidebar-theme" style="margin-top:5% !important;">
            <nav id="sidebar" >
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