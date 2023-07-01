<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:48:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay</title>

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
    <style>
    .product-col {
    }
    .product-column{
        width: 272px !important;
        display: contents;
    }
    .single-product-card{
        display: inline-block ;
    }
    </style>
</head>

<body class="inner">

<!-- Header Started -->

@php
                                            $count = isset($count) ? $count : 0;
                                            $count2 = isset($count2) ? $count2 : 0;
                                            @endphp

                                            
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
                        <h1>Health & Beauty</h1>
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
                       <!--  Price filter -->
                        
                       <div class="sidebar-box">
                              <h3 class="sidebar-title">By Price</h3>
                              <div class="price-filter-wrap">
                                <div class="input-wrap">
                                  <div class="input-group">
                                    <span class="input-txt">$</span>
                                    <input type="number" id="minNumber" placeholder="Minimum">
                                  </div>
                                  <div class="input-group">
                                    <span class="input-txt">$</span>
                                    <input type="number" id="maxNumber" placeholder="Maximum">
                                  </div>
                                </div>
                                <button id="filterPrice" class="def-btn">Filter now</button>
                              </div>
                            </div>

                        <!-- Price filter End -->
                        
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

   
                    @php
                    $data = App\Models\Products::all();
                    @endphp


                    <div class="product-column">
    @foreach($data as $data)
      @if ($data->category == 'Health & Beauty')
        <div class="single-product-card">
                            <div class="part-img">
                                <a href="{{ route('edit', ['id' => $data->id]) }}">
                                    <img src="/product/{{$data->image}}" alt="Product" style="width:286px;height:182px;">
                                </a>
                                <div class="cart-option cart-option-bottom">
                                    <ul>
                                        <li>
                                            <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-cart-form-{{$data->id}}">
                                                @csrf
                                                <a role="button" class="add-to-cart" onclick="document.getElementById('add-to-cart-form-{{$data->id}}').submit();">
                                                    <i class="fa-light fa-cart-shopping"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{url('/addwishlist',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-wishlist-form-{{$data->id}}">
                                                @csrf
                                                <a role="button" class="add-to-wish" onclick="document.getElementById('add-to-wishlist-form-{{$data->id}}').submit();">
                                                    <i class="fa-light fa-heart"></i>
                                                </a>
                                            </form>
                                        </li>
                                        <li>
                                            <a role="button" class="">
                                                <i class="fa-light fa-image"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="">
                                                <i class="fa-light fa-eye"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="part-txt">
                                <h4 class="product-name"><a href="{{ route('edit', ['id' => $data->id]) }}">{{$data->title}}</a></h4>
                                <p class="dscr">{{$data->description}}</p>
                                @if ($data->discounted_price)
                                  <p class="price" style="display: inline-block; text-decoration: line-through; margin-right: 10px;">${{$data->price}}</p>
                                  <p class="price" style="display: inline-block;">${{$data->discounted_price}}</p>
                                @else
                                  <p class="price" style="display: inline-block;">${{$data->price}}</p>
                                @endif

                                <!-- Retrieve Rating -->

                    @php
                    $product= App\Models\Products::all();
                    @endphp



                    @php
                
                    $productRatings = DB::table('orders')
                    ->join('products', 'orders.productname', '=', 'products.title')
                    ->whereNotNull('orders.rating')
                    ->where('products.title', $data->title)
                    ->pluck('orders.rating');

                    $averageRating = $productRatings->avg();
                    @endphp

                    

                    @if(isset($averageRating))
                    <p>Rating: {{ number_format($averageRating, 1) }}</p>
                        <div class="star">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $averageRating)
                                    <i class="fa-solid fa-star-sharp rated"></i>
                                @else
                                    <i class="fa-solid fa-star-sharp"></i>
                                @endif
                            @endfor
                        </div>
                    @else
                        <p>
                            Rating: Not rated yet
                        </p>
                        <div class="star">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star-sharp"></i>
                            @endfor
                        </div>
                    @endif


                    <!-- Retrieve Rating end -->


                                <!-- Add to Cart -->

                                <form action="{{ url('/addcart', $data->id) }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="add-to-cart-btn">
                                    <input type="hidden" name="quantity" value="1" min="1">
                                    <button type="submit">Add to Cart</button>
                                  </div>
                                </form>
                            </div>
                        </div>
                        
      @endif
    @endforeach
</div>

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
                            <a href="{{route('login')}}">
                            <img src="assets/images/logos/logo-7.png" alt="Logo" style="max-width: 220%;">
                            </a>
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
    <!-- Price filter script -->

<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#filterPrice').click(function() {
    var minPrice = parseFloat($('#minNumber').val()) || Number.NEGATIVE_INFINITY;
    var maxPrice = parseFloat($('#maxNumber').val()) || Number.POSITIVE_INFINITY;

    $('.single-product-card').each(function() {
      var priceElement = $(this).find('.price');
      var price = parseFloat(priceElement.last().text().replace('$', ''));
      
      if (price >= minPrice && price <= maxPrice) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
</script>
</body>


<!-- Mirrored from revelecommerce.codebasket.net/revel/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:48:26 GMT -->
</html>