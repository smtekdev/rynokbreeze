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
    <link href="assets/css/apps/file-manager.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/bootstrap-select.min.css">
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
                                        <li class="breadcrumb-item active" aria-current="page"><span>File Manager</span></li>
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
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-12  col-md-12">
                                <div class="card-box file-manager">
                                    <div class="file-manager-left">
                                        <a href="#" class="ripple-button m-auto ripple-button-primary btn-sm text-white font-12" type="button">
                                            <div class="ripple-ripple js-ripple">
                                              <span class="ripple-ripple__circle"></span>
                                            </div>
                                            <i class="las la-upload"></i> Upload New File
                                        </a>
                                        <div class="file-manager-list mt-4">
                                            <a href="javascript: void(0);">
                                                <i class="las la-inbox mr-2 font-17"></i>
                                                My Space<span class="badge badge-primary ml-auto">7</span>
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="las la-file-upload mr-2 font-17"></i>Uploaded Files
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="las la-users mr-2 font-17"></i>
                                                Shared with me
                                                <span class="badge badge-primary ml-auto">2</span>
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="lar la-clock mr-2 font-17"></i>Recent
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="las la-star mr-2 font-17"></i>Starred
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="las la-trash mr-2 font-17"></i>Trash
                                            </a>
                                            <a href="javascript: void(0);">
                                                <i class="las la-history mr-2 font-17"></i>Backups
                                            </a>
                                        </div>
                                        <div class="position-relative">
                                            <h6 class="mt-3 file-manager-label">Storage Details<span>&nbsp;</span></h6>
                                        </div>
                                        <div class="list-group b-0 mail-list mt-4">
                                            <div class="flex-grow-1 pl-2 pr-2 text-left mb-3">
                                                <span class="font-13"><small class="font-15 text-light-black strong mr-2"><i class="lar la-hdd"></i></small>Total Storage</span>
                                                <div class="progress progress-sm mt-1 mb-1">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="75" style="width:75%"></div>
                                                </div>
                                                <span class="font-10 text-muted">750 MB of 1GB</span>
                                            </div>
                                            <div class="flex-grow-1 pl-2 pr-2 text-left">
                                                <span class="font-13"><small class="font-15 text-light-black strong mr-2"><i class="lar la-image"></i></small>Images</span>
                                                <div class="progress progress-sm mt-1 mb-1">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="10" style="width:10%"></div>
                                                </div>
                                                <span class="font-10 text-muted">110 MB of 1GB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-manager-right">
                                        <div class="file-manager-right-top align-items-start row mb-3">
                                                <div class="col-md-6 col-sm-6 d-flex align-center">  
                                                    <a class="mr-2 font-19 text-dark stronger">Create a folder</a>
                                                    <i id="addFolder" class="las la-folder-plus file-manager-icon"></i>
                                                </div>
                                                <div class="col-md-6 col-sm-6 d-flex align-center justify-content-end">  
                                                    <i class="las la-cog file-manager-icon mr-2"></i>
                                                    <i class="las la-clock file-manager-icon" id="fileManagerHistory"></i>
                                                </div>
                                        </div>
                                        <div class="file-manager-bottom-history mt-4">
                                            <div class="files-table">
                                                <div class="files-t-heading">
                                                    <h6>History</h6>
                                                </div>
                                                <div class="file-t-content">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th><div class="th-content">File Name</div></th>
                                                                    <th><div class="th-content">Added</div></th>
                                                                    <th><div class="th-content">Modified</div></th>
                                                                    <th><div class="th-content">Size</div></th>
                                                                    <th><div class="th-content">Action</div></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Weekly Report.docx</td>
                                                                    <td>Jun 18, 2018</td>
                                                                    <td>Jun 20, 2018</td>
                                                                    <td>2 MB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Design Checklist.xlsx</td>
                                                                    <td>Jun 17, 2018</td>
                                                                    <td>Jun 19, 2018</td>
                                                                    <td>5.4 MB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Order Summary.pdf</td>
                                                                    <td>Jun 15, 2018</td>
                                                                    <td>Jun 17, 2018</td>
                                                                    <td>9 MB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>UI Issue.jpg</td>
                                                                    <td>Jun 10, 2018</td>
                                                                    <td>Jun 15, 2018</td>
                                                                    <td>180 KB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sample_Image.jpg</td>
                                                                    <td>Jun 4, 2018</td>
                                                                    <td>Jun 13, 2018</td>
                                                                    <td>10 KB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>card.pdf</td>
                                                                    <td>Jun 1, 2018</td>
                                                                    <td>Jun 5, 2018</td>
                                                                    <td>200 KB</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-manager-bottom-default">
                                            <div class="file-manager-right-bottom">
                                                <div class="mt-4 d-block">
                                                    <div class="">
                                                        <h6>Folders</h6>
                                                    </div>
                                                    <div class="folder-list">
                                                        <div class="folder">
                                                            <p class="main-title">Shared with</p>
                                                            <div class="d-flex">
                                                                <img src="assets/img/profile-6.jpg" class="shared-user">
                                                                <img src="assets/img/profile-2.jpg" class="shared-user">
                                                                <img src="assets/img/profile-3.jpg" class="shared-user">
                                                                <img src="assets/img/profile-4.jpg" class="shared-user">
                                                            </div>
                                                            <p class="sub-title">Folder</p>
                                                            <p class="folder-name">Project Reuirement</p>
                                                        </div>
                                                        <div class="folder">
                                                            <p class="main-title">Shared with</p>
                                                            <div class="d-flex">
                                                                <img src="assets/img/profile-7.jpg" class="shared-user">
                                                                <img src="assets/img/profile-8.jpg" class="shared-user">
                                                            </div>
                                                            <p class="sub-title">Folder</p>
                                                            <p class="folder-name">Design Samples</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <h6>Quick access files</h6>
                                                    </div>
                                                    <div class="file-list">
                                                        <div class="file pdf">
                                                            <i class="lar la-file-pdf file-icon"></i>
                                                            <div>
                                                                <p class="main-title">Design Specification</p>
                                                                <p class="sub-title">Last Modified</p>
                                                                <p class="date">20 Aug 2020</p>
                                                            </div>
                                                        </div>
                                                        <div class="file doc">
                                                            <i class="lar la-file-word file-icon"></i>
                                                            <div>
                                                                <p class="main-title">Project Requirement</p>
                                                                <p class="sub-title">Last Modified</p>
                                                                <p class="date">20 Aug 2020</p>
                                                            </div>
                                                        </div>
                                                        <div class="file xlsx">
                                                            <i class="lar la-file-excel file-icon"></i>
                                                            <div>
                                                                <p class="main-title">2020 Order Summary</p>
                                                                <p class="sub-title">Last Modified</p>
                                                                <p class="date">20 Aug 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 layout-spacing">
                                                <div class="files-table">
                                                    <div class="files-t-heading">
                                                        <h6 class="mb-0">All Files</h6>
                                                        <div class="search">
                                                            <i class="las la-search toggle-search"></i>
                                                            <form class="form-inline search-full form-inline search" role="search">
                                                                <div class="search-bar">
                                                                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search Files">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="file-t-content">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th><div class="th-content">Name</div></th>
                                                                        <th><div class="th-content">Owners</div></th>
                                                                        <th><div class="th-content">Modified</div></th>
                                                                        <th><div class="th-content">Size</div></th>
                                                                        <th><div class="th-content">Action</div></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Weekly Report.docx</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="javascript:void(0);" class="bs-tooltip" title="Jeremy Lawson"><img src="assets/img/profile-4.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                                                <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Dino Morea"><img src="assets/img/profile-5.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a> 
                                                                            </div>
                                                                        </td>
                                                                        <td>Jun 20, 2018</td>
                                                                        <td>2 MB</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Design Checklist.xlsx</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="javascript:void(0);" class="bs-tooltip" title="Shin Kyrien"><img src="assets/img/profile-9.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a> 
                                                                            </div>
                                                                        </td>
                                                                        <td>Jun 19, 2018</td>
                                                                        <td>5.4 MB</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Order Summary.pdf</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="javascript:void(0);" class="bs-tooltip" title="Bolor Johnson"><img src="assets/img/profile-19.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a> 
                                                                            </div>
                                                                        </td>
                                                                        <td>Jun 17, 2018</td>
                                                                        <td>9 MB</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>UI Issue.jpg</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="javascript:void(0);" class="bs-tooltip" title="Rahul Nadella"><img src="assets/img/profile-21.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a> 
                                                                            </div>
                                                                        </td>
                                                                        <td>Jun 15, 2018</td>
                                                                        <td>180 KB</td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="" data-original-title="Delete"><i class="las la-trash"></i></a>
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
                                    </div>
                                </div>
                                <!-- Create a folder Modal -->
                                <div class="modal fade" id="addFolderModal" tabindex="-1" role="dialog" aria-labelledby="addFolderModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <i class="las la-times" data-dismiss="modal"></i>
                                                <div class="compose-box">
                                                    <div class="compose-content" id="addFolderModalTitle">
                                                        <h5 class="">Create a folder</h5>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="d-flex mail-to mb-4">
                                                                        <div class="w-100">
                                                                            <input id="task" type="text" placeholder="Folder name" class="form-control" name="task">
                                                                            <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="w-100">
                                                                    <select class="selectpicker w-100" multiple="" data-max-options="3" title="Share this folder with">
                                                                        <option>Jeremy Lawson</option>
                                                                        <option>Dino Morea</option>
                                                                        <option>Bolor Johnson</option>
                                                                        <option>Nadel Pichungso</option>
                                                                        <option>Andy Flower</option>
                                                                        <option>Heath Streak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="w-100 mb-4 text-right">
                                                                <form>
                                                                    <label for="file-upload" class="custom-file-upload mb-0">
                                                                        <a title="Attach a file" class="btn btn-sm btn-primary  mr-2 pointer ">
                                                                            Add files
                                                                        </a>
                                                                    </label>
                                                                    <input id="file-upload" name='upload_cont_img' type="file" style="display:none;">
                                                                  </form>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="w-100">
                                                                    <div class="">
                                                                        <div class="card mb-1 shadow-none border border-light">
                                                                            <div class="p-2">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-auto">
                                                                                        <div class="avatar-sm">
                                                                                            <span class="avatar-sm background-success-teal text-white rounded d-flex align-center justify-content-center">
                                                                                                .JPG
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col pl-0">
                                                                                        <a href="javascript:void(0);" class="text-success-teal strong">design-changes.jpg</a>
                                                                                        <p class="mb-0">3.25 MB</p>
                                                                                    </div>
                                                                                    <div class="col-auto">
                                                                                        <!-- Button -->
                                                                                        <a href="javascript:void(0);" class="font-25 text-danger mr-2">
                                                                                            <i class="las la-times-circle"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                                <button class="btn btn-sm btn-primary">Create</button>
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
    <script src="admindb/assets/js/apps/file-manager.js"></script>
    <script src="admindb/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>