<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GoogleAuthController;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HomePage redirection route
Route::get("/",[HomeController::class,"index"]);

// Dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

// Admin->Add New
Route::get('Add_New_Category', [AdminController::class, 'Add_New_Category'])->name('Add_New_Category');
Route::get('Add_New_Product', [AdminController::class, 'Add_New_Product'])->name('Add_New_Product');
Route::get('Add_new_user', [AdminController::class, 'Add_new_user'])->name('Add_new_user');
Route::get('Add_new_vendor', [AdminController::class, 'Add_new_vendor'])->name('Add_new_vendor');

// Admin->E-commerce
Route::get('apps_ecommerce', [AdminController::class, 'apps_ecommerce'])->name('apps_ecommerce');
Route::get('apps_ecommerce_add_category', [AdminController::class, 'apps_ecommerce_add_category'])->name('apps_ecommerce_add_category');
Route::get('apps_ecommerce_add_customer', [AdminController::class, 'apps_ecommerce_add_customer'])->name('apps_ecommerce_add_customer');
Route::get('apps_ecommerce_add_product', [AdminController::class, 'apps_ecommerce_add_product'])->name('apps_ecommerce_add_product');
Route::get('apps_ecommerce_add_vendor', [AdminController::class, 'apps_ecommerce_add_vendor'])->name('apps_ecommerce_add_vendor');
Route::get('apps_ecommerce_cart', [AdminController::class, 'apps_ecommerce_cart'])->name('apps_ecommerce_cart');
Route::get('apps_ecommerce_categories', [AdminController::class, 'apps_ecommerce_categories'])->name('apps_ecommerce_categories');
Route::get('apps_ecommerce_checkout', [AdminController::class, 'apps_ecommerce_checkout'])->name('apps_ecommerce_checkout');
Route::get('apps_ecommerce_customers', [AdminController::class, 'apps_ecommerce_customers'])->name('apps_ecommerce_customers');
Route::get('apps_ecommerce_orders', [AdminController::class, 'apps_ecommerce_orders'])->name('apps_ecommerce_orders');
Route::get('apps_ecommerce_order_details', [AdminController::class, 'apps_ecommerce_order_details'])->name('apps_ecommerce_order_details');
Route::get('apps_ecommerce_products', [AdminController::class, 'apps_ecommerce_products'])->name('apps_ecommerce_products');
Route::get('apps_ecommerce_product_details', [AdminController::class, 'apps_ecommerce_product_details'])->name('apps_ecommerce_product_details');
Route::get('apps_ecommerce_refund', [AdminController::class, 'apps_ecommerce_refund'])->name('apps_ecommerce_refund');
Route::get('apps_ecommerce_sellers', [AdminController::class, 'apps_ecommerce_sellers'])->name('apps_ecommerce_sellers');
Route::get('apps_ecommerce_vendor', [AdminController::class, 'apps_ecommerce_vendor'])->name('apps_ecommerce_vendor');

// Admin->Others
Route::get('All_users', [AdminController::class, 'All_users'])->name('All_users');
Route::get('apps_companies', [AdminController::class, 'apps_companies'])->name('apps_companies');
Route::get('apps_company_details', [AdminController::class, 'apps_company_details'])->name('apps_company_details');
Route::get('apps_contacts', [AdminController::class, 'apps_contacts'])->name('apps_contacts');
Route::get('apps_file_manager', [AdminController::class, 'apps_file_manager'])->name('apps_file_manager');
Route::get('apps_invoice', [AdminController::class, 'apps_invoice'])->name('apps_invoice');
Route::get('basic_ui_lightbox', [AdminController::class, 'basic_ui_lightbox'])->name('basic_ui_lightbox');
Route::get('Category_List', [AdminController::class, 'Category_List'])->name('Category_List');
Route::get('Invoices', [AdminController::class, 'Invoices'])->name('Invoices');
route::get('/seller', [HomeController::class, 'seller'])->name('seller');  
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/vendors', [AdminController::class, 'vendors'])->name('vendors');
Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard'])->name('admin-dashboard');
Route::get('/chart', [ChartController::class, 'show'])->name('chart');
Route::get('/approveuser/{id}', [AdminController::class, 'approveUser']);

//Functions & Component
route::get('/navbar', [HomeController::class, 'navbar'])->name('navbar');
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// Below cart/wishlist function for main page
Route::post("/addcart/{id}",[HomeController::class,"addcart"]);
Route::post("/addwishlist/{id}",[HomeController::class,"addwishlist"]);
// Below cart/wishlist function for single product page
Route::post('/add-to-cart/{id}', [HomeController::class, 'addcart'])->name('add-to-cart');
Route::post('/add-to-wishlist/{id}', [HomeController::class, 'addwishlist'])->name('add-to-wishlist');
Route::get("/showcart/{id}",[HomeController::class,"showcart"]);
Route::get("/showwishlist/{id}",[HomeController::class,"showwishlist"]);
Route::match(['get', 'post'], '/remove/{id}', [HomeController::class, 'remove']);
Route::match(['get', 'post'], '/remove2/{id}', [HomeController::class, 'remove2']);
Route::get('/orders', [AdminController::class, 'orders']);
Route::post('/cancel/{id}', [AdminController::class, 'cancelOrder'])->name('cancel-data');
Route::post('/refund/{id}', [AdminController::class, 'refundOrder'])->name('refund-data');

//Nav Bar->AFTERMARKET
 route::get('/home-appliances', [HomeController::class, 'home_appliances'])->name('home-appliances');
 route::get('/automotive', [HomeController::class, 'automotive'])->name('automotive'); 
 route::get('/furniture-&-home-decor', [HomeController::class, 'furniture_and_home_decor'])->name('furniture-&-home-decor');
 route::get('/kids-entertainment', [HomeController::class, 'kids_entertainment'])->name('kids-entertainment');

//Nav Bar->CONSULTATIONS
route::get('/aromatherapy', [HomeController::class, 'aromatherapy'])->name('aromatherapy');
route::get('/medical-services', [HomeController::class, 'medical_services'])->name('medical-services');
route::get('/orthopaedic-therapy', [HomeController::class, 'orthopaedic_therapy'])->name('orthopaedic-therapy');
route::get('/dance-sessions', [HomeController::class, 'dance_sessions'])->name('dance-sessions');
route::get('/fitness-classes', [HomeController::class, 'fitness_classes'])->name('fitness-classes');

//Nav Bar->DISCOUNT COUPONS
route::get('/salon-&-spa', [HomeController::class, 'salon_and_spa'])->name('salon-&-spa');
route::get('/food-&-drink', [HomeController::class, 'food_and_drink'])->name('food-&-drink');
route::get('/clothing', [HomeController::class, 'clothing'])->name('clothing');
route::get('/home-appliances-coupons', [HomeController::class, 'home_appliances_coupons'])->name('home-appliances-coupons');
route::get('/fun-&-entertainment', [HomeController::class, 'fun_and_entertainment'])->name('fun-&-entertainment');
route::get('/sports-&-fitness', [HomeController::class, 'sports_and_fitness'])->name('sports-&-fitness');
route::get('/department-stores', [HomeController::class, 'department_stores'])->name('department-stores');

//Nav Bar->LISTINGS
route::get('/rent-a-house', [HomeController::class, 'rent_a_house'])->name('rent-a-house');
route::get('/rent-an-office', [HomeController::class, 'rent_an_office'])->name('rent-an-office');
route::get('/buying-&-selling', [HomeController::class, 'buying_and_selling'])->name('buying-&-selling');

//Nav Bar->NEW PRODUCTS
route::get('/health-&-beauty', [HomeController::class, 'health_and_beauty'])->name('health-&-beauty');
route::get('/home-services', [HomeController::class, 'home_services'])->name('home-services');
route::get('/fashion', [HomeController::class, 'fashion'])->name('fashion');
route::get('/sports', [HomeController::class, 'sports'])->name('sports');

//Nav Bar->SERVICES 
route::get('/digital-world', [HomeController::class, 'digital_world'])->name('digital-world');
route::get('/beauty-&-spa', [HomeController::class, 'beauty_and_spa'])->name('beauty-&-spa');
route::get('/things-to-do', [HomeController::class, 'things_to_do'])->name('things-to-do');
route::get('/restaurant', [HomeController::class, 'restaurant'])->name('restaurant');
route::get('/hotels-&-travels', [HomeController::class, 'hotels_and_travels'])->name('hotels-&-travels');
route::get('/health-&-fitness', [HomeController::class, 'health_and_fitness'])->name('health-&-fitness');

// Others
route::get('/rent-a-chair-in-salon-2', [HomeController::class, 'rent_a_chair_in_salon_2'])->name('rent-a-chair-in-salon-2');
route::get('/services', [HomeController::class, 'services'])->name('services');
route::get('/shop', [HomeController::class, 'shop'])->name('shop');
route::get('/listing', [HomeController::class, 'listing'])->name('listing');
route::get('/product-review', [HomeController::class, 'product_review'])->name('product-review');
route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/home', [HomeController::class, 'homeview'])->name('home');
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
Route::get('/login/google', function () {return Socialite::driver('google')->redirect();})->name('login.google');
Route::get('/login/google/callback', function () {$user = Socialite::driver('google')->user();return redirect('/home');});
Route::get('/admin/orders/{orderId}/send-email', [AdminController::class, 'sendOrderConfirmationEmail']);
Route::get('/aproducts/template', function () {return view('aproducts.template');})->name('aproducts.template');
Route::get('/product/{id}/edit', [HomeController::class, 'show'])->name('edit');
Route::get('/vendor/vendororders', [VendorController::class, 'vendorOrders'])->name('vendor.vendororders');
Route::get('/vendor/editprofile', [VendorController::class, 'editprofile'])->name('vendor.editprofile');
Route::post('/add-review/{id}', [HomeController::class, 'addReview'])->name('add-review');

// Profile Picture Upload
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');

// Cover Photo
Route::post('/profile/cover-photo', [App\Http\Controllers\ProfileController::class, 'updateCoverPhoto'])->name('user.profile.updateCoverPhoto');

// Redirect 
Route::get("/redirects",[HomeController::class,"redirects"]);
route::get('/custom', [HomeController::class, 'custom'])->name('custom');

//Single Inner Pages (Static)
route::get('/chicagoland-counselors', [HomeController::class, 'chicagoland_counselors'])->name('chicagoland-counselors');
route::get('/commando-machine', [HomeController::class, 'commando_machine'])->name('commando-machine');
route::get('/crosstown-fitness-classes', [HomeController::class, 'crosstown_fitness_classes'])->name('crosstown-fitness-classes');
route::get('/dance-&-sip-fitness-session', [HomeController::class, 'dance_and_sip_fitness_session'])->name('dance-&-sip-fitness-session');
route::get('/headband-foldable', [HomeController::class, 'headband_foldable'])->name('headband-foldable');
route::get('/saptherapy-physical-rehab', [HomeController::class, 'saptherapy_physical_rehab'])->name('saptherapy-physical-rehab');
route::get('/travel-&-tour', [HomeController::class, 'travel_and_tour'])->name('travel-&-tour');
route::get('/shop-details', [HomeController::class, 'shop_details'])->name('shop-details');
route::get('/discount-coupon', [HomeController::class, 'discount_coupon'])->name('discount-coupon');
route::get('/costco-promo-code', [HomeController::class, 'costco_promo_code'])->name('costco-promo-code');
route::get('/furniture-&-home-decor', [HomeController::class, 'furniture_and_home_decor'])->name('furniture-&-home-decor');
route::get('/rent-a-chair-in-salon', [HomeController::class, 'rent_a_chair_in_salon'])->name('rent-a-chair-in-salon');

// User
Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);
route::get('/user-dashboard', [HomeController::class, 'user_dashboard'])->name('user-dashboard');

// Vendor (Vendor related functions)
Route::get("/products",[VendorController::class,"products"]);
Route::post("/uploadproducts",[VendorController::class,"upload"]);
Route::get("/vendor_products",[VendorController::class,"vendor_products"]);
Route::get('/vendor', [VendorController::class, 'index']);
Route::get("/deletemenu/{id}",[VendorController::class,"deletemenu"]);
Route::get('/updateview/{id}', [VendorController::class, 'updateview'])->name('vendor.updateview');
Route::post("/update/{id}",[VendorController::class,"update"]);
Route::match(['get', 'post'], '/productdelete/{id}', [VendorController::class, 'productdelete']);
Route::post('/update-delivery-status', [VendorController::class, 'updateDeliveryStatus'])->name('updateDeliveryStatus');
Route::post('/coupons', [VendorController::class, 'storeCoupon'])->name('vendor.coupons.store');
Route::get('/coupons', [VendorController::class, 'coupons'])->name('vendor.coupons');
Route::delete('/coupons/{id}', '\App\Http\Controllers\VendorController@destroy')->name('coupons.destroy');
Route::post('/coupons/apply', [VendorController::class, 'applyCoupon'])->name('apply_coupon');

//Vendors (Static Vendor Pages)
route::get('/ben-haul', [HomeController::class, 'ben_haul'])->name('ben-haul');
route::get('/carter-grayson', [HomeController::class, 'carter_grayson'])->name('carter-grayson');
route::get('/harry-donald', [HomeController::class, 'harry_donald'])->name('harry-donald');
route::get('/james-lincoln', [HomeController::class, 'james_lincoln'])->name('james-lincoln');
route::get('/john-ceamus', [HomeController::class, 'john_ceamus'])->name('john-ceamus');
route::get('/robert-kane', [HomeController::class, 'robert_kane'])->name('robert-kane');

// Payments
Route::get('checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('checkout','App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.credit-card');


