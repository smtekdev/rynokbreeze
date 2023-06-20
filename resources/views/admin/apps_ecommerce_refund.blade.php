<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay Admin Dashboard</title>
    <style>

        .cncl  {
            color: white;
    background: orange !important ;
    padding: 0.3rem;
    border-radius: 3rem;
    width: 5rem;
    font-weight: bold;
    margin-left: 15%;
}

.cncl:hover  {
    background: red !important;
}


.martp{
    margin-top:10% !important;
}


    </style>
</head>

<body>

@include("admin.adminnavbar")


        <!--  Content Area Starts  -->
        <div id="content" class="main-content martp">
            <!--  Navbar Starts / Breadcrumb Area Starts -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm" style="margin-top: -85%;">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page"><span>Vendors</span></li>
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
                                                    <input type="text" id="input-search" class="form-control search-form-control  ml-lg-auto" placeholder="Search User">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 text-sm-right text-center align-self-center">
                                            <div class="d-flex justify-content-sm-end justify-content-center contact-options">
                                                <button class="btn btn-primary btn-sm"><i class="las la-plus"></i>Add New User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start from here -->

                           <br><br>                            
                           

                           <section class="section" id="menu">
                            <div class="menu-item-carousel">
                            <div style="display:flex; flex-wrap:wrap; justify-content:space-between;">

                            <!--Users should show below here  -->

                             @include ("admin.vendors")


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>