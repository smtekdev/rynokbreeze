<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:48:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RynokBay - Automotive</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">     
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="assets/vendor/css/flags.css">
    <link rel="stylesheet" href="assets/vendor/css/slick.css">
    <link rel="stylesheet" href="assets/vendor/css/modal-video.min.css">
    <link rel="stylesheet" href="assets/vendor/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="inner">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->

    <!--------------------------------- BANNER SECTION STARTS HERE --------------------------------->
    
        <!-- Slideshow container -->
        

    

            <!-- Full-width images with number and caption text -->
                            
        
          
          
          <!-- The dots/circles -->
          <!-- <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div> -->

<!-- The dots/circles -->
<!-- <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> -->


    <!-- slider end -->

  
        
   
    <!--------------------------------- BANNER SECTION ENDS HERE --------------------------------->
</div>




    <!--------------------------------- BANNER SECTION START --------------------------------->
    <div class="banner banner-inner" style="z-index: -1;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-9 col-8">
                    <div class="breadcrumb-txt">
                        <h1>Travel & Tour</h1>
                        <ul>
                            <li><a href="index-7.html"><i class="fa-regular fa-house"></i></a></li>
                            <li>/</li>
                            <li>Home</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3 col-4">
                    <div class="part-img">
                        <img src="assets/images/breadcrumb-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- BANNER SECTION END --------------------------------->



    <!--------------------------------- SHOP SECTION START --------------------------------->
    <div class="shop-wrap py-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 sidebar-col">
                    <div class="shop-sidebar">
                        <div class="sidebar-box">
                            <h3 class="sidebar-title">By Brands</h3>
                            <ul class="brand-filter" id="brandFilter">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand1">
                                        <label class="form-check-label" for="brand1"><span class="name">Club JM</span><span>(90)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand2">
                                        <label class="form-check-label" for="brand2"><span class="name">EVANS21</span><span>(80)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand3">
                                        <label class="form-check-label" for="brand3"><span class="name">Espresso</span><span>(43)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand4">
                                        <label class="form-check-label" for="brand4"><span class="name">YOTIAN JAPAN</span><span>(97)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand5">
                                        <label class="form-check-label" for="brand5"><span class="name">ORCHID</span><span>(18)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="brand6">
                                        <label class="form-check-label" for="brand6"><span class="name">Pristik</span><span>(25)</span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-box">
                            <h3 class="sidebar-title">By Price</h3>
                            <div class="price-filter-wrap">
                                <div class="input-wrap">
                                    <div class="input-group">
                                        <span class="input-txt">$</span>
                                        <input type="number" id="maxNumber">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-txt">$</span>
                                        <input type="number" id="minNumber">
                                    </div>
                                </div>
                                <div id="priceFilter" class="price-filter"></div>
                                <button id="filterPrice" class="def-btn">Filter now</button>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <h3 class="sidebar-title">Color</h3>
                            <ul class="brand-filter color-filter" id="colorFilter">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Black">
                                        <label class="form-check-label" for="Black">Black</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Pink">
                                        <label class="form-check-label" for="Pink">Pink</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="White">
                                        <label class="form-check-label" for="White">White</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Blue">
                                        <label class="form-check-label" for="Blue">Blue</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Orange">
                                        <label class="form-check-label" for="Orange">Orange</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="sidebar-box">
                            <div class="title-wrap">
                                <h3 class="sidebar-title">New Arrival</h3>
                                <div class="new-arrival-nav"></div>
                            </div>
                            <ul class="new-arrival-slider">
                                <li>
                                    <div class="part-img">
                                        <a href="#"><img src="assets/images/feat-product-1.jpg" alt="Image"></a>
                                    </div>
                                    <div class="part-txt">
                                        <a href="#" class="title">Diamond wedding ring</a>
                                        <p class="price">$195.00 <span>229.99</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="part-img">
                                        <a href="#"><img src="assets/images/feat-product-2.jpg" alt="Image"></a>
                                    </div>
                                    <div class="part-txt">
                                        <a href="#" class="title">Diamond wedding ring</a>
                                        <p class="price">$195.00 <span>229.99</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="part-img">
                                        <a href="#"><img src="assets/images/feat-product-3.jpg" alt="Image"></a>
                                    </div>
                                    <div class="part-txt">
                                        <a href="#" class="title">Diamond wedding ring</a>
                                        <p class="price">$195.00 <span>229.99</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="part-img">
                                        <a href="#"><img src="assets/images/feat-product-4.jpg" alt="Image"></a>
                                    </div>
                                    <div class="part-txt">
                                        <a href="#" class="title">Diamond wedding ring</a>
                                        <p class="price">$195.00 <span>229.99</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <div class="sidebar-new-arrival">
                            <div class="part-img">
                                <!-- <a href="#"><img src="assets/images/new-arrival-4.jpg" alt="Image"></a> -->
                            </div>
                            <div class="part-txt">
                                <p>Season Sale!</p>
                                <h3>New Arrivals</h3>
                                <!-- <a href="#">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-md-3 d-md-block d-none">
                                <h3 id="shopViewType">Shop Grid</h3>
                            </div>
                            <div class="col-md-9">
                                <div class="top-bar-right">
                                    <select name="sorting" class="select">
                                        <option value="0">Default Sorting</option>
                                        <option value="1">Price (Low to heigh)</option>
                                        <option value="2">Price (Heigh to low)</option>
                                        <option value="3">Best match</option>
                                        <option value="4">Relevance</option>
                                    </select>
                                    <div class="show-wrap">
                                        <span>Show:</span>
                                        <select name="show" class="select">
                                            <option value="1">12</option>
                                            <option value="2">16</option>
                                            <option value="3">20</option>
                                            <option value="4">24</option>
                                        </select>
                                    </div>
                                    <div class="view-wrap">
                                        <button class="active" id="gridView"><i class="flaticon-apps"></i></button>
                                        <button id="listView"><i class="flaticon-menu"></i></button>
                                    </div>
                                    <div class="top-pagination">
                                        <input type="number" name="current" id="currentPage" value="1" min="1">
                                        <span>of 3</span>
                                        <button><i class="fa-solid fa-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-lg-4 g-3">
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t1.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">35% Off On Beach Camping</a></h4>
                                    <p class="dscr">35% Off On Beach Camping</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t2.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">40% Off On North Tour</a></h4>
                                    <p class="dscr">40% Off On North Tour</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t3.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">30% Off On Beach View</a></h4>
                                    <p class="dscr">30% Off On Beach View</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t4.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">54% Off On Boat Ride</a></h4>
                                    <p class="dscr">54% Off On Boat Ride</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t5.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">51% Off On Waterfall View</a></h4>
                                    <p class="dscr">51% Off On Waterfall View</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/t6.jpeg" alt="Product" style="height: 200px;"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">43% Off On Ship On Sea</a></h4>
                                    <p class="dscr">43% Off On Ship On Sea</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        
            
         
                        <!-- <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/feat-product-5.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Fabrilife Kids T-shirt</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <span class="off-tag">15%</span>
                                    <a href="#"><img src="assets/images/feat-product-6.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Monster Bottle</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/feat-product-7.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Wireless Speaker</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/feat-product-8.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Blood Pressure Indicator</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/feat-product-9.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Hand Sanitizer</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <span class="off-tag">15%</span>
                                    <a href="#"><img src="assets/images/feat-product-10.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Wireless Headphone</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
                            <div class="single-product-card">
                                <div class="part-img">
                                    <a href="#"><img src="assets/images/feat-product-11.jpg" alt="Product"></a>
                                    <div class="cart-option cart-option-bottom">
                                        <ul>
                                            <li>
                                                <a role="button" class="add-to-cart">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="add-to-wish">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a role="button" class="quick-view">
                                                    <i class="fa-light fa-image"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="view-product">
                                                    <i class="fa-light fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="part-txt">
                                    <h4 class="product-name"><a href="#">Cotton Jacket for Men</a></h4>
                                    <p class="dscr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus aliquid laborum aperiam dolores. Dignissimos at harum corporis qui illo nam fugit recusandae ratione odit neque officia, accusamus ab, assumenda odio.</p>
                                    <p class="price"><span>$96.00</span>$75.00</p>
                                    <div class="star">
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp rated"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <button class="add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="bottom-pagination d-flex justify-content-center">
                        <ul>
                            <li>
                                <button><i class="fa-regular fa-angle-left"></i></button>
                            </li>
                            <li>
                                <button class="active">1</button>
                            </li>
                            <!-- <li>
                                <button>2</button>
                            </li> -->
                            <li>
                                <button><i class="fa-regular fa-angle-right"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- SHOP SECTION END --------------------------------->



    <!--------------------------------- FEATURES SECTION START --------------------------------->
    <!-- <div class="features" id="feature">
        <div class="container">
            <div class="panel panel-shadow px-0">
                <div class="custom-row">
                    <div class="custom-col">
                        <div class="single-feature">
                            <div class="part-icon">
                                <span><i class="flaticon-money-saving"></i></span>
                            </div>
                            <div class="part-txt">
                                <h4>Free Delivery</h4>
                                <p>For all order over $99</p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col">
                        <div class="single-feature">
                            <div class="part-icon">
                                <span><i class="flaticon-dollar"></i></span>
                            </div>
                            <div class="part-txt">
                                <h4>30 Days Return</h4>
                                <p>If goods have Problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col">
                        <div class="single-feature">
                            <div class="part-icon">
                                <span><i class="flaticon-credit-card"></i></span>
                            </div>
                            <div class="part-txt">
                                <h4>Secure Payment</h4>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col">
                        <div class="single-feature">
                            <div class="part-icon">
                                <span><i class="flaticon-call-center"></i></span>
                            </div>
                            <div class="part-txt">
                                <h4>24/7 Support</h4>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


<!--------------------------------- FOOTER SECTION START --------------------------------->
<div class="footer rev-7-footer">
    <div class="container">
        <div class="footer-subscribe">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-4">
                    <h3 style="font-size: 24px;">Subscribe Our Newsletter Now</h3>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-9 col-11 col-xs-12">
                    <form action="#" class="footer-subs-form">
                        <input type="text" name="Subscription-form" id="footer-subscribe-input" placeholder="Your email Address">
                        <button class="subs-btn">Subscribe</button>
                    </form>
                </div>

                <div class="col-xxl-5 col-xl-4">
                    <div class="footer-socials">
                        <h3 class="footer-title">Join us on</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="assets/images/socials/fb.png" alt="facebook logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="assets/images/socials/pt.png" alt="pinterest logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="assets/images/socials/lk.png" alt="linkedin logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="assets/images/socials/tw.png" alt="twitter logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="assets/images/socials/in.png" alt="instagram logo">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-footer">
        <div class="container">
            <div class="custom-row">
                <div class="custom-col-2">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <img src="assets/images/logos/logo-7.png" alt="Logo" style="max-width: 220%;">
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-map"></i></span>
                                </div>
                                <div class="txt">
                                    <span>4920 Trails End Road Ft United States, FL 33311</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-email"></i></span>
                                </div>
                                <div class="txt">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                    <a href="mailto:test@example.com">test@example.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-telephone"></i></span>
                                </div>
                                <div class="txt">
                                    <a href="tel:+123456679123">+123 456 679 123</a>
                                    <!-- <a href="tel:+123456789">+123 456 789</a> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="custom-col-2">
                    <div class="link-wrap">
                        <div class="footer-link">
                            <h3 class="footer-title">My Account</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policies</a></li>
                            </ul>
                        </div>
                        <div class="footer-link">
                            <h3 class="footer-title">Information</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">My Credit</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Personal Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-col-2">
                    <div class="link-wrap">
                        <div class="footer-link">
                            <h3 class="footer-title">Custom Links</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policies</a></li>
                            </ul>
                        </div>
                        <div class="footer-link">
                            <h3 class="footer-title">Categories</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">My Credit</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Personal Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <p>© Copyright Westcoast Animations All Right Reserved</p>
                </div>
                <div class="col-12">
                    <div class="part-img d-flex justify-content-center">
                        <img src="assets/images/payment-gateway.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- FOOTER SECTION END --------------------------------->

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.nice-select.min.js"></script>
    <!-- <script src="assets/vendor/js/jquery.flagstrap.min.js"></script> -->
    <script src="assets/vendor/js/slick.min.js"></script>
    <script src="assets/vendor/js/owl.carousel.min.js"></script>
    <script src="assets/vendor/js/jquery.syotimer.min.js"></script>
    <script src="assets/vendor/js/jquery-modal-video.min.js"></script>
    <script src="assets/vendor/js/nouislider.min.js"></script>
    <script src="assets/vendor/js/jquery.meanmenu.min.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/shop-page.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from revelecommerce.codebasket.net/revel/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:48:26 GMT -->
</html>