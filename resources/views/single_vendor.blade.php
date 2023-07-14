<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logos/logo-6s.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">  
    <link rel="stylesheet" href="{{asset('main.css')}}">


    <style>
        .header-banner-bg-wrapper{
            background: url(../images/bg/banner-bg-index-7.jpg) no-repeat 50% 0 !important;
        }
    </style>

</head>

<body class="rev-7-body">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->

<div class="container">

</div>


    
        <!--------------------------------- BANNER SECTION STARTS HERE --------------------------------->


        <!--------------------------------- BANNER SECTION ENDS HERE --------------------------------->
    </div>

    <!--------------------------------- TOP-PRODUCTS SECTION STARTS HERE --------------------------------->
    <div class="row flex-row-reverse" style="transform: none; margin-top: 5%;" >
        <div class="col-lg-4-5">
            <!-- <div class="shop-product-fillter">
                <div class="totall-product">
                    <p>We found <strong class="text-brand">29</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">50</a></li>
                                <li><a href="#">100</a></li>
                                <li><a href="#">150</a></li>
                                <li><a href="#">200</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">Featured</a></li>
                                <li><a href="#">Price: Low to High</a></li>
                                <li><a href="#">Price: High to Low</a></li>
                                <li><a href="#">Release Date</a></li>
                                <li><a href="#">Avg. Rating</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-9 col-lg-12">
       



            <?php
            $current_user_name = $user->name; 
            $data = App\Models\Products::all();
            ?>


<div class="row g-lg-4 g-3 AdjustVendorProductPage">      
                      @foreach($data as $data)
                      @if ($data->user_name == $current_user_name)             
                      <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">                          
                        <div class="single-product-card">
                            <div class="part-img">
                            <a href="{{ route('edit', ['id' => $data->id]) }}">
                                <img src="/product/{{$data->image}}" alt="Product" style="width:303px;height:200px;">
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
                                        <a href="{{ route('edit', ['id' => $data->id]) }}" class="">
                                            <i class="fa-light fa-eye"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="part-txt">
                                <h4 class="product-name"><a href="{{ route('edit', ['id' => $data->id]) }}">{{$data->title}}</a></h4>
                                <h4 class="product-name">City: {{$data->location}}</h4>
                                <h4 class="product-name">Area: {{$data->town}}</h4>
                                
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
                                    <button type="submit" style="color:white !important">Add</button>
                                  </div>
                                </form>
                            </div>
                        </div>                            
                    </div>                        
                @endif
                @endforeach   
                </div>   
           
            </div>
            <!--product grid-->
      
     
            <!--End Deals-->
        </div>
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            
            
        <!-- Fillter By Price -->
            
            
        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 12.0156px; top: 0px;"><div class="sidebar-widget widget-store-info mb-30 bg-3 border-0">
                <div class="vendor-logo mb-30">
                    <img src="assets/images/pexels-pavel-danilyuk-7654586-modified.png" alt="">
                </div>
                <div class="vendor-info text-center">
                    <h4 class="mb-5"><a href="#" class="text-heading">{{$user->name}}</a></h4>
                    <div class="product-rate-cover mb-15">
                        <div class="product-rate d-inline-block">
                            Rating:
                        </div>
                        <span class="font-small ml-5 text-muted"> ({{ number_format($user->orders()->avg('rating'), 1) }})</span>
                    </div>
                    <div class="vendor-des mb-30">
                        <p class="font-sm text-heading"></p>
                    </div>
                    <div class="follow-social mb-20">
                        <!-- <h6 class="mb-15">Follow Us</h6> -->
                        <ul class="social-network">
                            <li class="hover-up">
                                <a href="#">
                                    <img src="assets/imgs/theme/icons/social-tw.svg" alt="">
                                </a>
                            </li>
                            <li class="hover-up">
                                <a href="#">
                                    <img src="assets/imgs/theme/icons/social-fb.svg" alt="">
                                </a>
                            </li>
                            <li class="hover-up">
                                <a href="#">
                                    <img src="assets/imgs/theme/icons/social-insta.svg" alt="">
                                </a>
                            </li>
                            <li class="hover-up">
                            <img class="mr-5 rounded IpadImageSingleVendor" src="/avatars/{{ $user->avatar }}" alt="" style="border-radius: 2rem!important;">
                            </li>
                        </ul>
                    </div>
                    <div class="vendor-info">
                        <ul class="font-sm mb-20">
                            <li><img class="mr-5" src="assets/imgs/theme/icons/icon-location.svg" alt=""><strong>Address: </strong> <span>{{$user->address}}</span></li>
                            <li><img class="mr-5" src="assets/imgs/theme/icons/icon-contact.svg" alt=""><strong>Call Us:</strong><span>{{$user->phone}}</span></li>
                        </ul>
                        <a href="#" class="btn btn-xs">Contact Seller <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- <div class="sidebar-widget price_range range mb-30">
                <h5 class="section-title style-1 mb-30">Fill by price</h5>
                <div class="price-filter">
                    <div class="price-filter-inner">
                        <div id="slider-range" class="mb-20 noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 25%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 50%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                        <div class="d-flex justify-content-between">
                            <div class="caption">From: <strong id="slider-range-value1" class="text-brand">$500</strong></div>
                            <div class="caption">To: <strong id="slider-range-value2" class="text-brand">$1,000</strong></div>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item mb-10 mt-10">
                        <label class="fw-900">Color</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                            <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                            <br>
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                            <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                            <br>
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                            <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                        </div>
                        <label class="fw-900 mt-15">Item Condition</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                            <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                            <br>
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                            <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                            <br>
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                            <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                        </div>
                    </div>
                </div>
                <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
            </div> -->
            
        </div>
    </div>
    </div>


    <!--------------------------------- TOP-PRODUCTS SECTION ENDS HERE --------------------------------->



 <div class="footer rev-7-footer">
    <div class="container">
        <div class="footer-subscribe">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-4">
                    <h3>Subscribe Our Newsletter Now</h3>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-9 col-11 col-xs-12">
                    <form action="#" class="footer-subs-form">
                        <input type="text" name="Subscription-form" id="footer-subscribe-input" placeholder="Your Email Address">
                        <button class="subs-btn">Subscribe</button>
                    </form>
                </div>

                <div class="col-xxl-5 col-xl-4">
                    <div class="footer-socials">
                        <h3 class="footer-title">Join us on</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/socials/fb.png') }}" alt="facebook logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="{{asset('assets/images/socials/pt.png') }}" alt="pinterest logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/socials/lk.png') }}" alt="linkedin logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/socials/tw.png') }}" alt="twitter logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                <img src="{{ asset('assets/images/socials/in.png') }}" alt="instagram logo">
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
                        <img src="{{ asset('assets/images/logos/logo-7.png') }}" alt="Logo" style="max-width: 220%;">
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
                                    <a href="#">info@example.com</a>
                                    <a href="#">test@example.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-telephone"></i></span>
                                </div>
                                <div class="txt">
                                    <a href="#">+123 456 679 123</a>
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
                        <img src="{{ asset('assets/images/payment-gateway.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- FOOTER SECTION END --------------------------------->


    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.nice-select.min.js"></script>
    <script src="assets/vendor/js/jquery.flagstrap.min.js"></script>
    <script src="assets/vendor/js/slick.min.js"></script>
    <script src="assets/vendor/js/owl.carousel.min.js"></script>
    <script src="assets/vendor/js/jquery.meanmenu.min.js"></script>
    <script src="assets/vendor/js/jquery.syotimer.min.js"></script>
    <script src="assets/vendor/js/jquery-modal-video.min.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:44 GMT -->
</html>