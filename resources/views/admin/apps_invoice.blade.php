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
    <link href="assets/css/apps/invoice.css" rel="stylesheet" type="text/css">
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
                                        <li class="breadcrumb-item active" aria-current="page"><span>Invoice</span></li>
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
                <div class="row invoice layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>
                        <div class="doc-container">
                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="search search-bar-container">
                                            <i class="las la-search toggle-search"></i>
                                            <form class="form-inline search-full form-inline search" role="search">
                                                <div class="search-bar">
                                                    <input type="text" class="search-form-control  ml-lg-auto" placeholder="Search here">
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="K5UI89OP78" data-invoice-id="K5UI89OP78">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <span>12</span>
                                                            <span>Apr</span>
                                                            <span>2019</span>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Id: K5UI89OP78</p>
                                                            <p class="invoice-customer-name">Sales Invoice</p>
                                                            <p class="invoice-generated-date">Umbrella Corporation</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="P5UI89OP79" data-invoice-id="P5UI89OP79">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <span>11</span>
                                                            <span>Apr</span>
                                                            <span>2019</span>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Id: P5UI89OP79</p>
                                                            <p class="invoice-customer-name">Order Invoice</p>
                                                            <p class="invoice-generated-date">Hethwoy Inc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="A4UI89OP90" data-invoice-id="A4UI89OP90">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <span>10</span>
                                                            <span>Apr</span>
                                                            <span>2019</span>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Id: A4UI89OP90</p>
                                                            <p class="invoice-customer-name">Sales Invoice</p>
                                                            <p class="invoice-generated-date">Orapt Watches</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="H8UI89OP47" data-invoice-id="H8UI89OP47">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <span>15</span>
                                                            <span>Apr</span>
                                                            <span>2019</span>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Id: H8UI89OP47</p>
                                                            <p class="invoice-customer-name">Order Invoice</p>
                                                            <p class="invoice-generated-date">Zindo Consultants</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="I0PI89OP11" data-invoice-id="I0PI89OP11">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                            <span>14</span>
                                                            <span>Apr</span>
                                                            <span>2019</span>
                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">Id: I0PI89OP11</p>
                                                            <p class="invoice-customer-name">Sales Invoice</p>
                                                            <p class="invoice-generated-date">Balmo Electronics</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-container">
                                <div class="invoice-inbox">
                                    <div class="inv-not-selected">
                                        <p>Click any invoice to see the details</p>
                                    </div>
                                    <div class="invoice-header-section">
                                        <div class="invoice-action">
                                            <button class="btn btn-primary action-print">Print</button> 
                                        </div>
                                    </div>
                                    <div id="ct" class="">
                                        <div class="K5UI89OP78">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                                <div class="row inv--head-section">
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                           <img src="assets/img/company-1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">Tax Invoice</h3>
                                                    </div>
                                                </div>
                                                <div class="row inv--detail-section">
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">Invoice Details</p>
                                                    </div>
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Umbrella Corporation</p>
                                                        <p class="inv-street-addr">91 Jamast Street, California, 245874</p>
                                                        <p class="inv-email-address">umbrella@mail.com</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Id : </span> <span class="inv-number">K5UI89OP78</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Date : </span> <span class="inv-date">12 April 2020</span></p>
                                                    </div>
                                                </div>
                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Items</th>
                                                                        <th class="text-right" scope="col">Qty</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Printer</td>
                                                                        <td class="text-right">100</td>
                                                                        <td class="text-right">$300</td>
                                                                        <td class="text-right">$30000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Mobile</td>
                                                                        <td class="text-right">10</td>
                                                                        <td class="text-right">$50</td>
                                                                        <td class="text-right">$500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Monitor</td>
                                                                        <td class="text-right">30</td>
                                                                        <td class="text-right">$700</td>
                                                                        <td class="text-right">$21000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Bank Information:</h6>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Bank Name:</span> Digital Bank of Commerce</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Account Number:</span> 874574584512</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Payment Mode:</span> Cheque</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Transaction Id:</span> 8HD5248ADSY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$51500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$200</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$51200</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-contact">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <p class="">Email: info@mail.com &nbsp;|&nbsp; Contact: +1 5475-8244 &nbsp;|&nbsp; Website: www.website.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="P5UI89OP79">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                                <div class="row inv--head-section">
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                           <img src="assets/img/company-2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">Tax Invoice</h3>
                                                    </div>
                                                </div>
                                                <div class="row inv--detail-section">
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">Invoice Details</p>
                                                    </div>
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Hethwoy Inc.</p>
                                                        <p class="inv-street-addr">91 Jamast Street, California, 245874</p>
                                                        <p class="inv-email-address">hethwoy@mail.com</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Id : </span> <span class="inv-number">K5UI89OP78</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Date : </span> <span class="inv-date">11 April 2020</span></p>
                                                    </div>
                                                </div>
                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Items</th>
                                                                        <th class="text-right" scope="col">Qty</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Printer</td>
                                                                        <td class="text-right">100</td>
                                                                        <td class="text-right">$300</td>
                                                                        <td class="text-right">$30000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Mobile</td>
                                                                        <td class="text-right">10</td>
                                                                        <td class="text-right">$50</td>
                                                                        <td class="text-right">$500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Monitor</td>
                                                                        <td class="text-right">30</td>
                                                                        <td class="text-right">$700</td>
                                                                        <td class="text-right">$21000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Bank Information:</h6>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Bank Name:</span> Digital Bank of Commerce</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Account Number:</span> 874574584512</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Payment Mode:</span> Cheque</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Transaction Id:</span> 8HD5248ADSY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$51500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$200</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$51200</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-contact">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <p class="">Email: info@mail.com &nbsp;|&nbsp; Contact: +1 5475-8244 &nbsp;|&nbsp; Website: www.website.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="A4UI89OP90">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                                <div class="row inv--head-section">
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                           <img src="assets/img/company-3.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">Tax Invoice</h3>
                                                    </div>
                                                </div>
                                                <div class="row inv--detail-section">
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">Invoice Details</p>
                                                    </div>
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Orapt Watches</p>
                                                        <p class="inv-street-addr">91 Jamast Street, California, 245874</p>
                                                        <p class="inv-email-address">orapt@mail.com</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Id : </span> <span class="inv-number">K5UI89OP78</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Date : </span> <span class="inv-date">10 April 2020</span></p>
                                                    </div>
                                                </div>
                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Items</th>
                                                                        <th class="text-right" scope="col">Qty</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Printer</td>
                                                                        <td class="text-right">100</td>
                                                                        <td class="text-right">$300</td>
                                                                        <td class="text-right">$30000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Mobile</td>
                                                                        <td class="text-right">10</td>
                                                                        <td class="text-right">$50</td>
                                                                        <td class="text-right">$500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Monitor</td>
                                                                        <td class="text-right">30</td>
                                                                        <td class="text-right">$700</td>
                                                                        <td class="text-right">$21000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Bank Information:</h6>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Bank Name:</span> Digital Bank of Commerce</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Account Number:</span> 874574584512</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Payment Mode:</span> Cheque</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Transaction Id:</span> 8HD5248ADSY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$51500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$200</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$51200</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-contact">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <p class="">Email: info@mail.com &nbsp;|&nbsp; Contact: +1 5475-8244 &nbsp;|&nbsp; Website: www.website.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="H8UI89OP47">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                                <div class="row inv--head-section">
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                           <img src="assets/img/company-4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">Tax Invoice</h3>
                                                    </div>
                                                </div>
                                                <div class="row inv--detail-section">
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">Invoice Details</p>
                                                    </div>
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Zindo Consultants</p>
                                                        <p class="inv-street-addr">91 Jamast Street, California, 245874</p>
                                                        <p class="inv-email-address">zindo@mail.com</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Id : </span> <span class="inv-number">K5UI89OP78</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Date : </span> <span class="inv-date">15 April 2020</span></p>
                                                    </div>
                                                </div>
                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Items</th>
                                                                        <th class="text-right" scope="col">Qty</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Printer</td>
                                                                        <td class="text-right">100</td>
                                                                        <td class="text-right">$300</td>
                                                                        <td class="text-right">$30000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Mobile</td>
                                                                        <td class="text-right">10</td>
                                                                        <td class="text-right">$50</td>
                                                                        <td class="text-right">$500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Monitor</td>
                                                                        <td class="text-right">30</td>
                                                                        <td class="text-right">$700</td>
                                                                        <td class="text-right">$21000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Bank Information:</h6>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Bank Name:</span> Digital Bank of Commerce</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Account Number:</span> 874574584512</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Payment Mode:</span> Cheque</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Transaction Id:</span> 8HD5248ADSY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$51500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$200</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$51200</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-contact">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <p class="">Email: info@mail.com &nbsp;|&nbsp; Contact: +1 5475-8244 &nbsp;|&nbsp; Website: www.website.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="I0PI89OP11">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">
                                                <div class="row inv--head-section">
                                                    <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">
                                                           <img src="assets/img/company-5.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <h3 class="in-heading">Tax Invoice</h3>
                                                    </div>
                                                </div>
                                                <div class="row inv--detail-section">
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">To</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                        <p class="inv-detail-title">Invoice Details</p>
                                                    </div>
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Balmo Electronics</p>
                                                        <p class="inv-street-addr">91 Jamast Street, California, 245874</p>
                                                        <p class="inv-email-address">balmo@mail.com</p>
                                                    </div>
                                                    <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice Id : </span> <span class="inv-number">K5UI89OP78</span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Date : </span> <span class="inv-date">14 April 2020</span></p>
                                                    </div>
                                                </div>
                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Items</th>
                                                                        <th class="text-right" scope="col">Qty</th>
                                                                        <th class="text-right" scope="col">Unit Price</th>
                                                                        <th class="text-right" scope="col">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Printer</td>
                                                                        <td class="text-right">100</td>
                                                                        <td class="text-right">$300</td>
                                                                        <td class="text-right">$30000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Mobile</td>
                                                                        <td class="text-right">10</td>
                                                                        <td class="text-right">$50</td>
                                                                        <td class="text-right">$500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Monitor</td>
                                                                        <td class="text-right">30</td>
                                                                        <td class="text-right">$700</td>
                                                                        <td class="text-right">$21000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Bank Information:</h6>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Bank Name:</span> Digital Bank of Commerce</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Account Number:</span> 874574584512</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Payment Mode:</span> Cheque</p>
                                                                </div>
                                                                <div class="col-sm-12 col-12">
                                                                    <p class=" inv-subtitle"><span>Transaction Id:</span> 8HD5248ADSY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$51500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$200</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$500</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$51200</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-contact">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <p class="">Email: info@mail.com &nbsp;|&nbsp; Contact: +1 5475-8244 &nbsp;|&nbsp; Website: www.website.com</p>
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
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="admindb/assets/js/loader.js"></script>
    <script src="admindb/assets/js/apps/invoice.js"></script>
</body>
</html>