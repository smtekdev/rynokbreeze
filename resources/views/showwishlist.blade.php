<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynok Bay</title>

    <link rel="icon" type="image/x-icon" href="../assets/images/logos/logo-6s.png">
    <link rel="stylesheet" href="../assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="../assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="../assets/vendor/css/flags.css">
    <link rel="stylesheet" href="../assets/vendor/css/slick.css">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid/css/style.css">
    <link rel="stylesheet" href="demos/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> 

            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        #button{
            background-color: #F8F8F8 !important;
        }
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 29%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.btnnc{
  background: transparent;
    padding: 0.2rem;
    width: 5rem;
    border-radius: 1rem;
    text-align: center;
    margin-left: -3%;
    color: white !important;
}

.boxset{
  margin-top: -20%;
    position: absolute;
    margin-left: 40%;
    background: #b6862f;
    padding: 2%;
    border-radius: 2rem;
}

    </style>
</head>

<body class="rev-7-body">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->



<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important; margin-top: -19%;position: relative; z-index: 10; background: white; margin-left:1%;">
</a>

<div id="top" style="">

<div class="cartalign">

<table style="border-collapse: collapse; width: 100%; height:100%; margin: 0 auto;">
  <thead>  
    <tr style="text-align: center;">
      <!-- <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Product Image</th>       -->
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Product Name</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Price</th>
    </tr>  
  </thead>
  <tbody>
    <form action="{{url('orderconfirm')}}" method="POST">
    @csrf
  @foreach($data4 as $data4)
    <tr style="text-align: center;">
    <td style="padding: 10px; border: 1px solid #ddd;">
      <input type="text" name="productname[]" value="{{$data4->title}}" hidden="">
      {{$data4->title}}
        </td>
      <td style="padding: 10px; border: 1px solid #ddd;">
      <input type="text" name="price[]" value="{{$data4->price}}" hidden="">
      {{$data4->price}} $
    </td>      
      @endforeach  
  </tbody>
</table>


</form>


<!-- Below code for remove/delete -->

<table style="border-collapse: collapse; width: 12%; height:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: center;">
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white;">Action</th>
    </tr>  
  </thead>
  <tbody>
    @foreach($data3 as $data3) 
      <tr>
        <td style="padding: 3px; border: 1px solid #ddd; text-align: center;">
          <form action="{{url('/remove2' , $data3->id)}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning">Remove</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

</div>

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
                                    <li>
                                    @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                     @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                     @endif
                                    @endauth
                                    </div>
                                    @endif
                                    </li>
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
                            <img src="../assets/images/payment-gateway.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/js/jquery.nice-select.min.js"></script>
    <script src="../assets/vendor/js/jquery.flagstrap.min.js"></script>
    <script src="../assets/vendor/js/slick.min.js"></script>
    <script src="../assets/vendor/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/js/jquery.meanmenu.min.js"></script>
    <script src="../assets/vendor/js/jquery.syotimer.min.js"></script>
    <script src="../assets/vendor/js/jquery-modal-video.min.js"></script>
    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
  <script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
    window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>

<script>
    $("#order").click(
        function()
        {
            $("#appear").show();
        }
    );
</script>

<script>
    $("#close").click(
        function()
        {
            $("#appear").hide();
        }
    );
</script>


</body>


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:44 GMT -->
</html>
