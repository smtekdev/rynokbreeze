

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>RynokBay</title>

    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png"> 

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="css2-1?family=Exo+2:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css2-2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css2/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css2/">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css2/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css2/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css2/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="../assets/css2/bulk-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css2/style.css">


    <link rel="stylesheet" href="../assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="../assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="../assets/vendor/css/flags.css">
    <link rel="stylesheet" href="../assets/vendor/css/slick.css">
    <link rel="stylesheet" href="../assets/vendor/css/modal-video.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/nouislider.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="../assets/css/style.css">


    <style>
        .iupload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.ibtn {
    width: 2px;
  border: 2px solid #980506;
  color: white;
  background-color: #980506;
  padding: 4px 10px;
  border-radius: 8px;
  font-size: 10px;
  font-weight: bold;
}

.iupload-btn-wrapper input[type=file] {
  font-size: 50px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}


    /* Hide the "Choose File" and "No file chosen" text */
    input[type=file]::-webkit-file-upload-button {
        opacity: 0;
    }
    input[type=file]:before {
        content: "⇅";
        color: black !important;
        display: inline-block;
        background: transparent;
        padding: 0.25rem 0.5rem;
        border-radius: 50%;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.5;
        margin-right: 5px;
    }
    input[type=file]:hover:before {
        background-color: #0069d9;
    }
    input[type=file]:active:before {
        background-color: #0062cc;
    }


.form-control2 {
    display: block;
    width: 25%;
    margin-left:50%; 
    padding: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 0;
    color: transparent;
    background-color: transparent;
    background-clip: padding-box;
    border: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    z-index: 99;
    position: relative;
}


.adjst{
    background: transparent;
    color: black;
    border: none;
    font-size: 1.5rem;
    margin-left: -29%;
    margin-top: -85%;
    border-radius: 50%;
}


.adjst:hover{
    background:black;
    color:white;
}

    </style>
</head>

<body class="AdjustBody">

<!-- Header Started -->





<!-- logout and user info -->
<div class="vendorwelcome AdjustNow LogoutAdjustNow">                                    
    <p class="font-semibold text-xl text-gray-800 leading-tight">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-blue-500 btnst">{{ __('Logout') }}</button>
        </form>
    </hp>
</div>
<!-- logout and user info end -->


<div class="vendorlg">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important; margin-top: -16%;position: relative; z-index: 10; background: white; margin-left:1%;">
</a>
</div>
<!-- Header Ended -->





<div style="background-color: #f7f7f7; padding: 20px;" class="text-center">
<h1>Update Product</h1>
  <form action="{{url('/update' ,$data->id)}}" method="post" enctype="multipart/form-data">

  @csrf

    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Title</label>
      <input type="text" name="title" value="{{$data->title}}"  style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Price</label>
      <input type="text" name="price" value="{{$data->price}}"  style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Discount</label>
        <input type="text" name="discounted_price" value="{{ $data->discounted_price }}" style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>


    
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Description</label>
      <input type="text" name="discription" value="{{$data->discription}}"  style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Old Image</label>
      <img src="/product/{{$data->image}}" style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">New Image</label>
      <input type="file" name="image"  style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>


    <div>
        <input type="submit" value="Save" style="border:1px solid black; padding:10px; border-radius:1rem; background-color:#61DBFF;">
    </div>
  </form>

  <br><br>

  <div>



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
                                    <img src="../assets/images/socials/fb.png" alt="facebook logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="../assets/images/socials/pt.png" alt="pinterest logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="../assets/images/socials/lk.png" alt="linkedin logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="../assets/images/socials/tw.png" alt="twitter logo">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="../assets/images/socials/in.png" alt="instagram logo">
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
                            <img src="../assets/images/logos/logo-7.png" alt="Logo" style="max-width: 220%;">
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
                                <li><a href="#">About Us</a></li><br>
                                <li><a href="#">Contact Us</a></li><br>
                                <li><a href="#">Blogs</a></li><br>
                                <li><a href="#">Terms Of Use</a></li><br>
                                <li><a href="#">Privacy Policies</a></li><br>
                            </ul>
                        </div>
                        <div class="footer-link">
                            <h3 class="footer-title">Information</h3>
                            <ul>
                                <li><a href="#">My Order</a></li><br>
                                <li><a href="#">Wishlist</a></li><br>
                                <li><a href="#">My Credit</a></li><br>
                                <li><a href="#">Login</a></li><br>
                                <li><a href="#">Personal Info</a></li><br>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-col-2">
                    <div class="link-wrap">
                        <div class="footer-link">
                            <h3 class="footer-title">Custom Links</h3>
                            <ul>
                                <li><a href="#">About Us</a></li><br>
                                <li><a href="#">Contact Us</a></li><br>
                                <li><a href="#">Blogs</a></li><br>
                                <li><a href="#">Terms Of Use</a></li><br>
                                <li><a href="#">Privacy Policies</a></li><br>
                            </ul>
                        </div>
                        <div class="footer-link">
                            <h3 class="footer-title">Categories</h3>
                            <ul>
                                <li><a href="#">My Order</a></li><br>
                                <li><a href="#">Wishlist</a></li><br>
                                <li><a href="#">My Credit</a></li><br>
                                <li><a href="#">Login</a></li><br>
                                <li><a href="#">Personal Info</a></li><br>
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
                        <img src="../assets/images/payment-gateway.png" alt="Image">
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

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="assets/images2/vegetable/product/10.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="assets/images2/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="assets/images2/vegetable/product/12.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="assets/images2/vegetable/product/13.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- Add address modal box start -->
    <div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                            <label for="fname">First Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            <label for="lname">Last Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                            <label for="email">Email Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="address" style="height: 100px"></textarea>
                            <label for="address">Enter Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                            <label for="pin">Pin Code</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add address modal box end -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Edit Profile Start -->
    <div class="modal fade theme-modal" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="pname" value="Jack Jennas">
                                    <label for="pname">Full Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email1" value="vicki.pope@gmail.com">
                                    <label for="email1">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input class="form-control" type="tel" value="4567891234" name="mobile" id="mobile" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                    <label for="mobile">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address1" value="8424 James Lane South San Francisco">
                                    <label for="address1">Add Address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address2" value="CA 94080">
                                    <label for="address2">Add Address 2</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect1" aria-label="Floating label select example">
                                        <option selected="">Choose Your Country</option>
                                        <option value="kindom">United Kingdom</option>
                                        <option value="states">United States</option>
                                        <option value="fra">France</option>
                                        <option value="china">China</option>
                                        <option value="spain">Spain</option>
                                        <option value="italy">Italy</option>
                                        <option value="turkey">Turkey</option>
                                        <option value="germany">Germany</option>
                                        <option value="russian">Russian Federation</option>
                                        <option value="malay">Malaysia</option>
                                        <option value="mexico">Mexico</option>
                                        <option value="austria">Austria</option>
                                        <option value="hong">Hong Kong SAR, China</option>
                                        <option value="ukraine">Ukraine</option>
                                        <option value="thailand">Thailand</option>
                                        <option value="saudi">Saudi Arabia</option>
                                        <option value="canada">Canada</option>
                                        <option value="singa">Singapore</option>
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect">
                                        <option selected="">Choose Your City</option>
                                        <option value="kindom">India</option>
                                        <option value="states">Canada</option>
                                        <option value="fra">Dubai</option>
                                        <option value="china">Los Angeles</option>
                                        <option value="spain">Thailand</option>
                                    </select>
                                    <label for="floatingSelect">City</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address3" value="94080">
                                    <label for="address3">Pin Code</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="button" data-bs-dismiss="modal" class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile End -->

    <!-- Edit Card Start -->
    <div class="modal fade theme-modal" id="editCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel8">Edit Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="finame" value="Mark">
                                    <label for="finame">First Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="laname" value="Jecno">
                                    <label for="laname">Last Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect12" aria-label="Floating label select example">
                                        <option selected="">Card Type</option>
                                        <option value="kindom">Visa Card</option>
                                        <option value="states">MasterCard Card</option>
                                        <option value="fra">RuPay Card</option>
                                        <option value="china">Contactless Card</option>
                                        <option value="spain">Maestro Card</option>
                                    </select>
                                    <label for="floatingSelect12">Card Type</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light">Update Card</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Card End -->

    <!-- Remove Profile Modal Start -->
    <div class="modal fade theme-modal remove-profile" id="removeProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" data-bs-target="#removeAddress" data-bs-toggle="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade theme-modal remove-profile" id="removeAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove Profile Modal End -->

    <!-- Edit Profile Modal Start -->
    <div class="modal fade theme-modal" id="edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Edit Your Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" value="Grocery Store">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" value="joshuadbass@rhyta.com">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country / Region</label>
                            <input type="text" class="form-control" id="country" value="107 Veltri Drive">
                        </div>
                        <div class="mb-3">
                            <label for="established" class="form-label">Year Established</label>
                            <input type="email" class="form-control" id="established" value="2022">
                        </div>
                        <div class="mb-3">
                            <label for="employees" class="form-label">Total Employees</label>
                            <input type="text" class="form-control" id="employees" value="154 - 360 People">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="email" class="form-control" id="category" value="Grocery">
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="street" value="234 High St">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City / State</label>
                            <input type="email" class="form-control" id="city" value="107 Veltri Drive">
                        </div>
                        <div class="mb-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" value="B23 6SN">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Cancle</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile Modal End -->


    
    <!-- latest jquery-->
    <script src="assets/js2/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="assets/js2/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js2/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js2/bootstrap/bootstrap-notify.min.js"></script>
    <script src="assets/js2/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js2/feather/feather.min.js"></script>
    <script src="assets/js2/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="assets/js2/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js2/slick/slick.js"></script>
    <script src="assets/js2/slick/custom_slick.js"></script>

    <!-- Apexchart Js -->
    <script src="assets/js2/apexchart.js"></script>
    <script src="assets/js2/custom-chart.js"></script>

    <!-- Nav & tab upside js -->
    <script src="assets/js2/nav-tab.js"></script>

    <!-- script js -->
    <script src="assets/js2/script.js"></script>

    <!-- thme setting js -->
    <script src="assets/js2/theme-setting.js"></script>

    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profilePic.src = URL.createObjectURL(inputFile.files[0]);            
        }

    </script>


</body>

</html>
