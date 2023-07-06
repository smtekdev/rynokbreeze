<?php
use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rynokbay</title>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> 

            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


             <!-- new -->


             <link rel="icon" type="image/x-icon" href="assets/images/logos/logo-6s.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="assets/vendor/css/flags.css">
    <link rel="stylesheet" href="assets/vendor/css/slick.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid/css/style.css">
    <link rel="stylesheet" href="demos/">

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

.image-wrapper {
    width: 10rem;
    height: 7rem;
    overflow: hidden;
}


.image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
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

.prices{
    font-size: 1.25rem;
    position: relative;
    bottom: 75px;
    margin-left: 36%;
    border: 1px solid black;
    width: 20%;
    text-align: center;
}

.coupons{
    font-size: 1rem;
    position: relative;
    bottom: 75px;
    margin-left: 36%;
    border: 1px solid black;
    width: 20%;
    text-align: center;
}

.totalWrapper{
    position: absolute;
    margin-left: -1%;
    width: 120%;
    /* height: 142%; */
}

.SymbolControl{
    font-size: 2rem;
}

.WrapCartBtn{
    display: flex;
    width: 56%;
    margin-left: 28%;
}

.InputWrapper{
    margin-top: 26%;
}

    </style>
</head>

<body class="rev-7-body">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->



<div id="top" style="">

<div class="cartalign">

<table style="border-collapse: collapse; width: 100%; height:100%; margin: 0 auto;">
  <thead>  
    <tr style="text-align: center;">      
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Product Name</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; width: 15%;">Product Image</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; width: 15%;">Seller</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Price</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white;">Quantity</th>
    </tr>  
  </thead>
  <tbody>

  <!-- Order confirm Form -->

  <form action="{{ url('orderconfirm') }}" method="POST">

  <!-- Discount Function related -->
    @csrf  
    @php
    $totalPrice = 0; // Initialize total price variable
    @endphp  
    @foreach($data as $item)

    @php
        $itemPrice = $item->discounted_price ?? $item->price;
        $quantity = $item->quantity;
        $subtotal = $itemPrice * $quantity;
        $totalPrice += $subtotal; 
    @endphp


            <tr style="text-align: center;">
                <td style="padding: 10px; border: 1px solid #ddd;height: 121px !important;">
                    {{ $item->title }}
                    <input type="hidden" name="productname[]" value="{{ $item->title }}">
                </td>
                <td style="border: 1px solid #ddd;">
                 <div class="image-wrapper">
                   <img src="/product/{{$item->image}}" alt="Product Image">
                   <input type="hidden" name="image_url[]" value="{{ $item->image }}">
                 </div>
                </td>

                <td style="padding: 10px; border: 1px solid #ddd; height: 121px !important; text-align: center; width: 11%;">
                    {{ $item->user_name }}
                        <input type="hidden" name="seller_name" value="{{ $item->user_name }}">
                </td>
                <td style="padding: 10px; border: 1px solid #ddd; height: 121px !important; text-align: center; width: 11%;">
                    <div style="display: flex;margin-left: 36%;">
                    $<input type="number" name="price[]" value="{{ $item->discounted_price ?? $item->price }}" min="0">
                    </div>
                </td>

                <td style="padding: 10px; border: 1px solid #ddd;width: 11%; text-align: center;">
                   <div class="WrapCartBtn">
                       <button type="button" onclick="decreaseQuantity({{ $item->id }})" class="BtnAdjust"><span class="SymbolControl">-</span></button>
                       <div class="InputWrapper">
                           <input type="number" name="quantity[]" id="quantityInput_{{ $item->id }}" value="{{ $item->quantity }}" class="InputAdjust" min="1" data-price="{{ $itemPrice }}" style="text-align: center;">
                       </div>
                       <button type="button" onclick="increaseQuantity({{ $item->id }})" class="BtnAdjust"><span class="SymbolControl">+</span></button>
                   </div>
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>


    <button class="btn hidden-button" type="button" id="order" style="background-color:#136ABF; color:white; margin-left: 49%; position: absolute; margin-top:-5%; display:none;">Confirm Order</button>
    




<!-- Hidden div to show form after clicking Confirm Order button -->
<div style="position: fixed; top: 70%; left: 13%; transform: translate(-50%, -50%); display:none; z-index:10;" id="appear" class="boxset">
  <form>
    <div style="display:flex; justify-content:center;align-items: center; margin-bottom: 10px;">
      <label style="font-size: 16px; color: #fff; margin-bottom: 5px; margin-right:1%; background:transparent" class="btnnc">Name:</label>
      <input type="text" name="name" placeholder="Enter your Name" style="padding: 5px; border-radius: 5px; border: 2px solid #ddd; width: 250px;">
    </div>

    <div style="display:flex; justify-content:center; align-items: center; margin-bottom: 10px;">
      <label style="font-size: 16px; color: #333; margin-bottom: 5px; margin-right:1%;" class="btnnc">Phone:</label>
      <input type="text" name="phone" placeholder="Enter your Phone Number" style="padding: 5px; border-radius: 5px; border: 2px solid #ddd; width: 250px;">
    </div>

    <div style="display:flex; justify-content:center; align-items: center; margin-bottom: 10px;">
      <label style="font-size: 16px; color: #333; margin-bottom: 5px; margin-right:1%;" class="btnnc">Address:</label>
      <input type="text" name="address" placeholder="Enter your Address" style="padding: 5px; border-radius: 5px; border: 2px solid #ddd; width: 250px;">
    </div>

    <div style ="display :flex ;justify-content :center ;margin-top :20 px ;">
      <input type ="submit" value ="Confirm Order" style ="background-color:#65b25e;color:#fff;border:none;padding:10px 20px;border-radius:5px;margin-left:-3%;">
    </div>

    <button class ="btn" id ="close"type ="button"style="margin-left:72%;margin-top:-21.5%;padding:9px;background-color:#D10102;color:white;"> X </button>
  </form>
</div>





<table style="border-collapse: collapse; width: 12%; height:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: center;">
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white;">Action</th>
    </tr>  
  </thead>
  <tbody>
    @foreach($data2 as $data2) 
      <tr>
        <td style="padding: 3px; border: 1px solid #ddd; text-align: center;height: 121px !important;">
          <form action="{{url('/remove' , $data2->id)}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning">Remove</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

</div>

<!-- New button at the bottom -->
<button class="btn new-btn" type="button" id="order" style="background-color:#136ABF; color:white; margin-left: 49%; position: absolute; margin-top:-10%;">Confirm Order</button>


<!-- Discount Coupon -->

<br>



<?php
    $egtotalPrice = $totalPrice;
    $discountAmount = session('discountAmount') ?? 0;
    if ($discountAmount > $egtotalPrice) {
        $discountAmount = $egtotalPrice;
    }
    
    $newTotalPrice = $egtotalPrice - floatval($discountAmount);
    if ($newTotalPrice < 0) {
        $newTotalPrice = 0;
    }
?>

<?php
$newTotalPriceString = sprintf("%.2f", $newTotalPrice); // convert to string with 2 decimal places
$newTotalPriceNumeric = floatval($newTotalPriceString);
?>









<div class="totalWrapper">
<div class="prices">
    Subtotal: <span id="subtotalPrice">${{ $egtotalPrice }}</span>
</div>




<div class="coupons">
    <form method="POST" action="{{ route('apply_coupon') }}">
        @csrf
        <input type="text" id="couponCode" name="couponCode" placeholder="Enter coupon code">
        <button type="submit">Apply</button>
    </form>
</div>

@if (session()->has('discountAmount'))    
    <div class="prices">            
        Discount: <span id="discountAmount">${{ $discountAmount }}</span>
    </div>
@endif



<div class="prices">            
    Total: <span id="egtotalPrice">${{ $newTotalPrice }}</span>
</div>

</div>
<br><br><br>
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
                            <a href="{{route('login')}}">
                            <img src="../assets/images/logos/logo-7.png" alt="Logo" style="max-width: 220%;">
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

<script>
function incrementQuantity(button) {
  var input = button.parentNode.querySelector(".quantity-input");
  input.stepUp();
}

function decrementQuantity(button) {
  var input = button.parentNode.querySelector(".quantity-input");
  input.stepDown();
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to calculate total price
        function calculateTotalPrice() {
            var totalPrice = 0;
            $('.quantity-input').each(function() {
                var quantity = $(this).val();
                var price = parseFloat($(this).data('price'));
                var subtotal = quantity * price;
                totalPrice += subtotal;
            });
            $('#totalPrice').text(totalPrice.toFixed(2));
        }

        // Calculate total price initially
        calculateTotalPrice();

        // Listen for changes in quantity inputs
        $('.quantity-input').on('input', function() {
            calculateTotalPrice();
        });
    });
</script>


<!-- JavaScript code for applying coupon -->


<!-- JS for confirm order duplicate button bcz original button have layout issue -->

<script>
        var visibleButton = document.querySelector('.new-btn');
        var hiddenButton = document.querySelector('.hidden-button');
        visibleButton.addEventListener('click', function() {
          hiddenButton.click(); 
        });
</script>

<script>
function decreaseQuantity(itemId) {
    var inputElement = document.getElementById('quantityInput_' + itemId);
    var currentValue = parseInt(inputElement.value);

    if (currentValue > 1) {
        inputElement.value = currentValue - 1;
    }
}

function increaseQuantity(itemId) {
    var inputElement = document.getElementById('quantityInput_' + itemId);
    var currentValue = parseInt(inputElement.value);

    inputElement.value = currentValue + 1;
}
</script>

<!-- To Calculate price when increasing product quantity -->

<script>
    var discountAmount = <?php echo json_encode($discountAmount); ?>; // Store the discount amount in a JavaScript variable

    function increaseQuantity(itemId) {
        var quantityInput = document.getElementById('quantityInput_' + itemId);
        var quantity = parseInt(quantityInput.value);
        quantity++;
        quantityInput.value = quantity;
        updateTotalPrice();
    }

    function decreaseQuantity(itemId) {
        var quantityInput = document.getElementById('quantityInput_' + itemId);
        var quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            updateTotalPrice();
        }
    }

    function updateTotalPrice() {
        var totalPrice = 0;
        var quantityInputs = document.querySelectorAll('[name="quantity[]"]');
        quantityInputs.forEach(function (quantityInput) {
            var itemPrice = parseFloat(quantityInput.dataset.price);
            var quantity = parseInt(quantityInput.value);
            totalPrice += itemPrice * quantity;
        });
        
        var subtotalPriceElement = document.getElementById('subtotalPrice');
        var discountAmountElement = document.getElementById('discountAmount'); // Add this line
        var egtotalPriceElement = document.getElementById('egtotalPrice');
        
        subtotalPriceElement.textContent = '$' + totalPrice.toFixed(2);
        
        var newTotalPrice = totalPrice - discountAmount; // Calculate the new total price
        
        if (newTotalPrice < 0) {
            newTotalPrice = 0;
        }
        
        egtotalPriceElement.textContent = '$' + newTotalPrice.toFixed(2);
    }
</script>


</body>

</html>
