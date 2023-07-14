<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:48:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/flaticon/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/flags.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/modal-video.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<style>
    .background-image {
    width: 534px;
    height: 504px;
    background-image: url("/product/{{$product->image}}");
    background-size: cover;
    border-radius: 2rem;
    margin-top: -12%;
    margin-left: -4%;
}
.InputAdjust{
    text-align: center;
    margin-top: 70%;
}
.BtnAdjust{
    width: 45%;
}
.InputWrapper{
    text-align: center;
    width: 28%;
}
.WrapCartBtn {
    display: flex;
    position: absolute;
    width: 8%;
    margin-left: 6%;
    margin-top: 5%;
}
.QuantityLable{
    position: absolute;
    margin-top: 5.5%;
    font-size: 1rem;
}
#addToCart{
width: 112%;
}

</style>
</head>

<body class="inner">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->

        <!--------------------------------- BANNER SECTION STARTS HERE --------------------------------->


        <!--------------------------------- BANNER SECTION ENDS HERE --------------------------------->
        </div>

<!--------------------------------- TOP-PRODUCTS SECTION STARTS HERE --------------------------------->
<section class="rev-7-top-product">
    <div class="container">
            <div class="flash-deal">
                <div class="shop-details py-120" style="padding-top: 3%; padding-bottom: 0px;">
                    <div class="container">
                        <div class="product-view-area">
                            <div class="row">
                                <div class="col-xl-6 col-lg-5 col-md-6">
                                    <div class="part-img mr-30">
                                    <div class="background-image"></div>
                                        <div class="btn-box">
                                         
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="col-xl-6 col-lg-7 col-md-6 MakeCenterIpad">
                                    <div class="part-txt">
                                        <h2 class="main-product-title">{{$product->title}}</h2>                                        
                                        <h2 class="main-product-price">{{$product->price}}$</h2>

                                      


                                        <p class="price"></p>
                                        <ul class="short-details">
                                            <li>Availability: <span>In stock</span></li>                                            
                                            <li>Seller: <span>{{$product->user_name}}</span></li>                                  
                                            <!-- <li>Tags: <span>Fashion, Hood, Classic</span></li> -->
                                        </ul>


  

<p class="dscr"></p>


<!-- Add to cart and add to wishlist button -->

<div class="btn-box IpadBtnSetting">
    <form action="{{ route('add-to-cart', $product->id) }}" method="POST" style="display: inline;">
        @csrf        
        <div class="WrapCartBtn IpadCartBtnAdjust">
          <button type="button" onclick="decreaseQuantity()" class="BtnAdjust">-</button>
          <div class="InputWrapper">
          <input type="number" name="quantity" id="quantityInput" value="1" class="InputAdjust">
          </div>
          <button type="button" onclick="increaseQuantity()" class="BtnAdjust">+</button>
        </div>
        <button type="submit" id="addToCart"><span><i class="fa-light fa-cart-shopping"></i></span> Add to Cart</button>
     </form>
     <label class="QuantityLable IpadLabelSet">Select<br> Quantity</label>
    <form action="{{ route('add-to-wishlist', $product->id) }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" id="addToWishList" style="width: calc(121% - 10px);"><span><i class="fa-light fa-heart"></i></span> Add to Wishlist</button>
    </form>
</div>
<br><br>


                                        
                                        <div class="product-share">
                                            <span>Share Link:</span>
                                            <div class="social">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                                                <a href="#"><i class="fa-solid fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-area" style="background-color: white;">
                            <nav>
                                <div class="nav" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-dscr-tab" data-bs-toggle="tab" data-bs-target="#nav-dscr" type="button" role="tab" aria-controls="nav-dscr" aria-selected="true">Description</button>
                                    <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Information</button>
                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <p>
                               </p>
                                </div>
                                <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                                    <div class="product-information">
                                        
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
    </div>
</section>


<br><br><br>
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

<!-- Quantity increment script -->
<script>
    const quantityInput = document.querySelector('.rapper-quantity input');
const quantityUpButton = document.querySelector('.quantity-up');
const quantityDownButton = document.querySelector('.quantity-down');

let currentQuantity = parseInt(quantityInput.value);

quantityUpButton.addEventListener('click', () => {
  currentQuantity++;
  quantityInput.value = currentQuantity;
});

quantityDownButton.addEventListener('click', () => {
  if (currentQuantity > 1) {
    currentQuantity--;
    quantityInput.value = currentQuantity;
  }
});
</script>

<!-- Quantity store -->


<script>
  function decreaseQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    var currentValue = parseInt(quantityInput.value);

    if (currentValue > 1) {
      quantityInput.value = currentValue - 1;
    }
  }

  function increaseQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    var currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
  }
</script>



</body>


</html>