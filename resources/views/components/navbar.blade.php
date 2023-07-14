<style>
    .btadjst{        
    margin-right: 16%;
    margin-top: -2.5%;
    }
    #success-message{
    position: absolute;
    right: 7%;
    margin-top: 4.5%;
    font-size: 18px;
    }   
</style>

<body class="inner">
    
      <!--------------------------------- PRODUCT QUICK VIEW PANEL START --------------------------------->
      <div class="product-quick-view-panel">
        <div class="img">
            <img class="quick-view-image" src="assets/images/index.html" alt="image">
        </div>
    </div>
    <!--------------------------------- PRODUCT QUICK VIEW PANEL END --------------------------------->




    <!--------------------------------- MOBILE MENU START (Hamburger) --------------------------------->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light AdjustHamb">
    <div class="container-fluid HideMobileNav">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{route ('login')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              New Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="{{route('health-&-beauty')}}">Health & Beauty</a></li>
              <li><a class="dropdown-item" href="{{route('health-&-beauty')}}">Health & Beauty</a></li>
              <li><a class="dropdown-item" href="{{route('fashion')}}">Fashion</a></li>
              <li><a class="dropdown-item" href="{{route('sports')}}">Sports</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Discount Coupons
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <li><a class="dropdown-item" href="{{route('salon-&-spa')}}">Salon & Spa</a></li>
              <li><a class="dropdown-item" href="{{route('food-&-drink')}}">Food & Drink</a></li>
              <li><a class="dropdown-item" href="{{route('clothing')}}">Clothing</a></li>
              <li><a class="dropdown-item" href="{{route('home-appliances-coupons')}}">Home Appliances</a></li>
              <li><a class="dropdown-item" href="{{route('fun-&-entertainment')}}">Fun & Entertainment</a></li>
              <li><a class="dropdown-item" href="{{route('sports-&-fitness')}}">Sports & Fitness</a></li>
              <li><a class="dropdown-item" href="{{route('department-stores')}}">Department Stores</a></li>                                                                
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Aftermarket
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <li><a class="dropdown-item" href="{{route('home-appliances')}}">Home Appliances</a></li>
              <li><a class="dropdown-item" href="{{route('automotive')}}">Automotive</a></li>
              <li><a class="dropdown-item" href="{{route('furniture-&-home-decor')}}">Furniture & Home decor</a></li>
              <li><a class="dropdown-item" href="{{route('kids-entertainment')}}">Kids Entertainm</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Listings
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
              <li><a class="dropdown-item" href="{{route('rent-a-house')}}">Rent a House / Room</a></li>
              <li><a class="dropdown-item" href="{{route('rent-an-office')}}">Rent an Office</a></li>
              <li><a class="dropdown-item" href="{{route('buying-&-selling')}}">Buying & Selling</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
              <li><a class="dropdown-item" href="{{route('digital-world')}}">Digital Services</a></li>
              <li><a class="dropdown-item" href="{{route('beauty-&-spa')}}">Beauty & Spa</a></li>
              <li><a class="dropdown-item" href="{{route('things-to-do')}}">Things to do</a></li>
              <li><a class="dropdown-item" href="{{route('restaurant')}}">Restaurant</a></li>
              <li><a class="dropdown-item" href="{{route('hotels-&-travels')}}">Hotels & Travels</a></li>
              <li><a class="dropdown-item" href="{{route('health-&-fitness')}}">Health & Fitness</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Consultations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
              <li><a class="dropdown-item" href="{{route('aromatherapy')}}">Aromatherapy</a></li>
              <li><a class="dropdown-item" href="{{route('medical-services')}}">Medical Services</a></li>
              <li><a class="dropdown-item" href="{{route('orthopaedic-therapy')}}">Orthopaedic Therapy</a></li>
              <li><a class="dropdown-item" href="{{route('dance-sessions')}}">	Dance Sessions</a></li>
              <li><a class="dropdown-item" href="{{route('fitness-classes')}}">Fitness Classes</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!--------------------------------- MOBILE MENU END --------------------------------->


    <div class="header-banner-bg-wrapper">
        <!--------------------------------- HEADER SECTION START --------------------------------->
        <div class="header rev-7-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-7 col-lg-7" style="padding-top: 10px;">
                            <div class="top-header-link d-lg-flex d-none">
                                <span>Store Location: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-5 col-lg-5">
                            <ul class="top-header-link justify-content-lg-end justify-content-center">
                                <li>
                                    <select name="currency" id="currency" class="select">
                                        <option value="USD">Dollar (USD)</option>
                                        <option value="USD">Ruble (RUB)</option>
                                        <!-- <option value="BDT">Taka (BDT)</option> -->
                                    </select>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header-bg">
                <div class="container">
                    <div class="bottom-header">
                        <div class="container">
                            <div class="row justify-content-center justify-content-sm-between align-items-center g-lg-4 g-0">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-5">
                                    <div class="logo">
                                        <a href="{{ route('login') }}"> 
                                            <img src="{{ asset('assets/images/logos/logo-6.png') }}" alt="logo" style="max-width: 148% !important;" class="AdjustTopLogo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-lg-6 col-md-6 col-sm-5 col-12 search-col TabletSearch">
                                    <div class="header-search">
                                        <form>
                                            <div class="wrap">
                                                <select name="category" class="select">
                                                    <option value="">All Categories</option>
                                                    <option value="1">Women's Fashion</option>
                                                    <option value="2">Men's Fashion</option>
                                                    <option value="3">Photography </option>
                                                    <option value="4">Watches & Accessories</option>
                                                    <option value="5">TV & Home Appliances</option>
                                                    <option value="6">Bags & Shoes</option>
                                                    <option value="7">Toys , Kids & Babies</option>
                                                    <option value="8">Headphone</option>
                                                </select>
                                                <span class="devider"></span>
                                                <input type="search" name="search" placeholder="What do you need?">
                                            </div>
                                            <button type="submit">
                                                <span><i class="fa-light fa-magnifying-glass"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-lg-4 col-md-3 col-sm-4 col-7 CartTabletAdjust">
                       
                                <!-- Welcome Message -->                              

                                    <ul class="bottom-header-right d-flex align-items-center justify-content-end">
                                    @if (isset($successMessage))
                                    <div id="success-message">{{ $successMessage }}</div>
                                        <script>
                                            setTimeout(function() {
                                                var successMessage = document.getElementById('success-message');
                                                successMessage.style.display = 'none';
                                            }, 3000);
                                        </script>
                                    @endif

                                            <!-- Logout -->


                                        <li class="header-cart-options">
                                            <a role="button" class="search-open d-sm-none"><i class="fa-light fa-magnifying-glass"></i></a>
                                            @if (Route::has('login'))
                                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                            @auth                            
                                            <a href="{{route('user-dashboard')}}"  class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            <!-- logout and user info -->
                                            <div class="LogoutMobile">       
                                                    <form method="POST" action="{{ route('logout') }}" class="">
                                                      @csrf
                                                      <button type="submit" class="underline text-blue-500 btnst btadjst setbtnlog">{{ __('Logout') }}</button>
                                                    </form>
                                                </hp>
                                            </div>
                                            <!-- logout and user info end -->


                                            @else
                                            <a href="{{ route('login') }}" class="compare-list-btn">
                                             Sign in
                                            </a>
                                            @if (Route::has('register'))
                                            <a href="#" class="compare-list-btn">
                                                /
                                               </a>
                                               <button id="" style="font-size: 18px;color:#7E7E7E;font-weight: 500;"><a href="{{ route('register') }}" >Sign up</a></button>
                                               <div id="" class="modal">
                                    
                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                  <span class="close">&times;</span>
                                                  <a href="user-signup.html" style="width: 64%; margin-left:19%;" class="def-btn rev-6-def-btn">User Signup</a>
                                                  <br>
                                                  <a href="vendor-signup.html" style="width: 75%; margin-left:14%;" class="def-btn rev-6-def-btn">Vendor Signup</a>
                                                </div>
                                                @endif
                                                @endauth
                                              </div>
                                              @endif
                                            @php
                                            $count = isset($count) ? $count : 0;
                                            $count2 = isset($count2) ? $count2 : 0;
                                            $count = Session::get('count', 0);
                                            $count2 = Session::get('count2', 0);
                                            @endphp
                                            <a href="{{ Auth::check() ? url('/showwishlist', Auth::user()->id) : '#' }}">
                                            <i class="fa-light fa-heart"></i>
                                            @auth
                                                <span class="quantity">{{ $count2 }}</span>
                                            @endauth
                                            @guest
                                            <span class="quantity">0</span>
                                            @endguest
                                            </a>                                        
                                            <a href="{{ Auth::check() ? url('/showcart', Auth::user()->id) : '#' }}">

                                                <i class="fa-light fa-cart-shopping"></i>
                                                @auth
                                                <span class="quantity">{{ $count }}</span>
                                            @endauth
                                            @guest
                                            <span class="quantity">0</span>
                                            @endguest
                                            </a>


                                        </li>
                                        <li class="user-short-info">
                                            <span class="user-name d-lg-inline-block d-none"></span>
                                            <!-- <div class="img-box">
                                                <img src="assets/images/headshot/person.png" alt="">
                                            </div> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-bar">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6">
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="container-fluid">
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <nav id="revel-mobile-menu" class="revel-mobile-menu">
                                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="{{route ('login')}}">
                                                                Home
                                                            </a>
                             
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">New Products</a>
                                                            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                                                                <li><a class="dropdown-item" href="{{route('health-&-beauty')}}">Health & Beauty</a></li>
                                                                <li><a class="dropdown-item" href="{{route('home-services')}}">Home Services</a></li>
                                                                <li><a class="dropdown-item" href="{{route('fashion')}}">Fashion</a></li>
                                                                <li><a class="dropdown-item" href="{{route('sports')}}">Sports</a></li>

                                                            </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Discount Coupons
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                                                                <li><a class="dropdown-item" href="{{route('salon-&-spa')}}">Salon & Spa</a></li>
                                                                <li><a class="dropdown-item" href="{{route('food-&-drink')}}">Food & Drink</a></li>
                                                                <li><a class="dropdown-item" href="{{route('clothing')}}">Clothing</a></li>
                                                                <li><a class="dropdown-item" href="{{route('home-appliances-coupons')}}">Home Appliances</a></li>
                                                                <li><a class="dropdown-item" href="{{route('fun-&-entertainment')}}">Fun & Entertainment</a></li>
                                                                <li><a class="dropdown-item" href="{{route('sports-&-fitness')}}">Sports & Fitness</a></li>
                                                                <li><a class="dropdown-item" href="{{route('department-stores')}}">Department Stores</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="pageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Aftermarket
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="pageDropdown">
                                                                <li><a class="dropdown-item" href="{{route('home-appliances')}}">Home Appliances</a></li>
                                                                <li><a class="dropdown-item" href="{{route('automotive')}}">Automotive</a></li>
                                                                <li><a class="dropdown-item" href="{{route('furniture-&-home-decor')}}">Furniture & Home decor</a></li>
                                                                <li><a class="dropdown-item" href="{{route('kids-entertainment')}}">Kids Entertainment</a></li>
                                                                <!-- <li><a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                                                                <li><a class="dropdown-item" href="register.html">Register Page</a></li> -->
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Listings
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                                                <li><a class="dropdown-item" href="{{route('rent-a-house')}}">Rent a House / Room</a></li>
                                                                <li><a class="dropdown-item" href="{{route('rent-an-office')}}">Rent an Office</a></li>
                                                                <li><a class="dropdown-item" href="{{route('buying-&-selling')}}">Buying & Selling</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Services
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                                                <li><a class="dropdown-item" href="{{route('digital-world')}}">Digital Services</a></li>
                                                                <li><a class="dropdown-item" href="{{route('beauty-&-spa')}}">Beauty & Spa</a></li>
                                                                <li><a class="dropdown-item" href="{{route('things-to-do')}}">Things to do</a></li>
                                                                <li><a class="dropdown-item" href="{{route('restaurant')}}">Restaurant</a></li>
                                                                <li><a class="dropdown-item" href="{{route('hotels-&-travels')}}">Hotels & Travels</a></li>
                                                                <li><a class="dropdown-item" href="{{route('health-&-fitness')}}">Health & Fitness</a></li>
                                                            </ul>
                                                        </li>
                                     
                                                    
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Consultations
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                                                <li><a class="dropdown-item" href="{{route('aromatherapy')}}">Aromatherapy</a></li>
                                                                <li><a class="dropdown-item" href="{{route('medical-services')}}">Medical Services</a></li>
                                                                <li><a class="dropdown-item" href="{{route('orthopaedic-therapy')}}">Orthopaedic Therapy</a></li>
                                                                <li><a class="dropdown-item" href="{{route('dance-sessions')}}">	Dance Sessions</a></li>
                                                                <li><a class="dropdown-item" href="{{route('fitness-classes')}}">Fitness Classes</a></li>                                                                
                                                            </ul>
                                                        </li>
                                                        <!-- <li class="nav-item dropdown">
                                                            <a class="dropdown-item" href="{{route("aromatherapy")}}">Aromatherapy</a>
                                                        </li> -->
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------- HEADER SECTION END --------------------------------->


</div>




