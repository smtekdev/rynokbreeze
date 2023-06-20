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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css">
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css">
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min-1.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ui-elements/pagination.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css">
    <link href="assets/css/apps/ecommerce.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->  
</head>
<body>



<!--  Sidebar Start  -->

@include("admin.adminnavbar")
<!--  Sidebar Ends  -->


        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area Starts -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="apps_ecommerce.html">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Customers</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area Ends -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="widget-content searchable-container grid">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 filtered-list-search align-self-center">
                                            <form class="form-inline my-2 my-lg-0">
                                                <div class="">
                                                    <i class="las la-search toggle-search"></i>
                                                    <input type="text" id="input-search" class="form-control search-form-control  ml-lg-auto" placeholder="Search Customers">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 text-sm-right text-center align-self-center">
                                            <div class="d-flex justify-content-sm-end justify-content-center contact-options">
                                                <button class="btn btn-primary btn-sm"><i class="las la-plus"></i> Add New Customer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                        <div class="widget ecommerce-table">
                                            <div class="widget-heading">
                                                <h5 class="">List of Customers</h5>
                                                <div class="dropdown custom-dropdown-icon">
                                                    <a class="font-17 mr-3 pointer"><i class="las la-sync-alt"></i></a>
                                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Export</span> <i class="las la-angle-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                                        <a class="dropdown-item" data-value=".xlsx" href="javascript:void(0);">Export in .xlsx</a>
                                                        <a class="dropdown-item" data-value=".csv" href="javascript:void(0);">Export in .csv</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-content">
                                                                        <div class="login-one-inputs check">
                                                                            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none">
                                                                            <label class="cbx" for="cbx">
                                                                                <span>
                                                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                    </svg>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <th><div class="th-content">Customer Name</div></th>
                                                                <th><div class="th-content">Phone/Email</div></th>
                                                                <th><div class="th-content">Wallet balance</div></th>
                                                                <th><div class="th-content">Last Order</div></th>
                                                                <th><div class="th-content">Status</div></th>
                                                                <th><div class="th-content">Joining Date</div></th>
                                                                <th><div class="th-content">Details</div></th>
                                                                <th><div class="th-content">Action</div></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx2" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx2">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                Jim Carry
                                                                </td>
                                                                <td>80124 57856 <br>jim@mail.com</td>
                                                                <td>$12,989</td>
                                                                <td>28.01.2020</td>
                                                                <td>
                                                                    <span class="badge badge-success-teal light">Active</span>
                                                                </td>
                                                                <td>30.10.2016</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx3" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx3">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Justin Williamson
                                                                </td>
                                                                <td>85474 12457 <br>justin@mail.com</td>
                                                                <td>$2,989</td>
                                                                <td>18.10.2020</td>
                                                                <td>
                                                                    <span class="badge badge-warning light">Inactive</span>
                                                                </td>
                                                                <td>28.01.2016</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx4" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx4">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Kane Pulock
                                                                </td>
                                                                <td>74147 58525 <br>kane@mail.com</td>
                                                                <td>$1,989</td>
                                                                <td>14.05.2020</td>
                                                                <td>
                                                                    <span class="badge badge-danger light">Blocked</span>
                                                                </td>
                                                                <td>14.05.2016</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx5" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx5">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Cameron Jones
                                                                </td>
                                                                <td>74512 12589 <br>cameron@mail.com</td>
                                                                <td>$5,989</td>
                                                                <td>24.10.2020</td>
                                                                <td>
                                                                    <span class="badge badge-success-teal light">Active</span>
                                                                </td>
                                                                <td>14.10.2017</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx6" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx6">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                Aaron Bancroft
                                                                </td>
                                                                <td>74000 00589 <br>aaron@mail.com</td>
                                                                <td>$1,478</td>
                                                                <td>14.05.2020</td>
                                                                <td>
                                                                    <span class="badge badge-success-teal light">Active</span>
                                                                </td>
                                                                <td>24.05.2019</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx7" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx7">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Jilly Williams
                                                                </td>
                                                                <td>74123 45789 <br>jimmy@mail.com</td>
                                                                <td>$1,456</td>
                                                                <td>25.01.2020</td>
                                                                <td>
                                                                    <span class="badge badge-warning light">Inactive</span>
                                                                </td>
                                                                <td>15.01.2015</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx8" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx8">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Daniel Johnson
                                                                </td>
                                                                <td>87458 45789 <br>dan@mail.com</td>
                                                                <td>$9,745</td>
                                                                <td>15.08.2020</td>
                                                                <td>
                                                                    <span class="badge badge-danger light">Blocked</span>
                                                                </td>
                                                                <td>15.08.2008</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> 
                                                                    <div class="login-one-inputs check">
                                                                        <input class="inp-cbx" id="cbx9" type="checkbox" style="display: none">
                                                                        <label class="cbx" for="cbx9">
                                                                            <span>
                                                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                                </svg>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Jane Salah
                                                                </td>
                                                                <td>77458 05789 <br>jane@mail.com</td>
                                                                <td>$2,145</td>
                                                                <td>20.01.2020</td>
                                                                <td>
                                                                    <span class="badge badge-success-teal light">Active</span>
                                                                </td>
                                                                <td>18.01.2019</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info">Details</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-danger ml-2" title="Delete" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="pagination p13 text-center w-100 mt-4">
                                                        <ul class="mx-auto">
                                                        <a href="#" class="prev"><li>Prev</li></a>
                                                        <a class="is-active" href="#"><li>1</li></a>
                                                        <a href="#"><li>2</li></a>
                                                        <a href="#"><li>3</li></a>
                                                        <a href="#" class="next"><li>Next</li></a>
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
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page to view the responsive functionalities
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                <p class="">Copyright © 2023 <a target="_blank" href="Rynokbay">Rynokbay</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control" placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-success"></i>
                                                    <span class="mb-0 mt-1 text-success">Backend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-1.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-2.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Sophia Garner</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Nice and amazing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Jackie Smith</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Send me the .pdf files asap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-4.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-5.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Ryan Timberlake</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Invoice has been generated</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-6.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Julie Roman</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thank you so much.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Gareth Sarkar</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thats was awesome</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Kylie Roberts</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Amazing feature.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Initiated<span class="float-right">52%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                    <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends --> 
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="admindb/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="admindb/bootstrap/js/popper.min.js"></script>
    <script src="admindb/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="admindb/bootstrap/js/bootstrap.min.js"></script>
    <script src="admindb/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admindb/assets/js/app.js"></script>    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="admindb/assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="admindb/assets/js/loader.js"></script>
    <script src="admindb/assets/js/apps/ecommerce.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>