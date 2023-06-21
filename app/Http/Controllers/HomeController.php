<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Carts;
use App\Models\WishList;
use App\Models\Order;
use App\Mail\OrderMail;
use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{

    // Add Cart 
    public function addcart(Request  $request,$id)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();
        
            $productid=$id;
        
            $quantity = 1;            
        
            // Retrieve the product image
           
            
            $cart=new carts;
        
            $cart->user_id=$user_id;
        
            $cart->product_id=$productid;
        
            $cart->quantity_id=$quantity;

           //  $cart->image = $image;
        
            $cart->save();
        
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }

// Auth Validation

    public function redirects()
    {
   
        $data=products::all();
   
        $data5 = products::all();
   
        $usertype= Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }            
       
        elseif($usertype=='0' || $usertype === null)
        {
            $count = 0;
            $count2 = 0;
            // below two line code for cart purpose to verify and add count to specific user cart at front/backend.
            $user_id=Auth::id();
            $count=carts::where('user_id' ,$user_id)->count();
            $count2=WishList::where('user_id' ,$user_id)->count();
           
            return view('home', compact('data','count','count2'));
            // return view("home" ,compact("data"));
        }        
        else
        {         
            return view('vendor.vendorhome', compact('data','data5'));
        }
    }   

// Cart Item remove

     public function remove($id)
     {
        $data=carts::find($id);

        $data->delete();

        return redirect()->back();

     }

    // Confirm Order


    public function orderconfirm(Request $request)
    {
        // Validate input parameters
        $validatedData = $request->validate([
            'productname.*' => 'required|string',
            'price.*' => 'required|numeric|min:0',
            'quantity.*' => 'required|integer|min:1',
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        foreach ($request->productname as $key => $productname) {
            $data = new Order;

            $data->productname = $productname;
            $data->price = (int)$request->price[$key];
            $data->quantity = (int)$request->quantity[$key];

            
            $data->name = $request->name ?? '';
            $data->phone = $request->phone ?? '';
            $data->address = $request->address ?? '';
            $data->save();
        }

// Send email for orders those email have not sent

        $orderItems = Order::where('is_email_sent', false)->get();
        foreach ($orderItems as $order) {
            $userEmail = Auth::user()->email;
            $emailData = [
                'orderItems' => $orderItems,
            ];
            // Email remove from here
            $order->is_email_sent = true;
            $order->save();
        }

        // Clear the carts table
        Carts::truncate();
        return redirect()->back();
    }


// Delivery Status Update

    public function updateDeliveryStatus(Request $request)
    {
        $order = Order::find($request->orderId);
        $order->delivery_status = $request->delivery_status;
        $order->save();

        // Send email notification to the user
        $userEmail = $request->email;
        $emailData = [
            'order' => $order,
        ];
        Mail::to($userEmail)->send(new DeliveryStatusUpdated($emailData));

        if (count(Mail::failures()) > 0) {
            // There was an error sending the email
            // Handle the error or log it for further investigation
            foreach (Mail::failures() as $emailAddress) {
                // Log or handle each failed email address
                Log::error("Failed to send email to: $emailAddress");
            }
        } else {
            // Email sent successfully
            // Add some log statements or debugging output to verify
            Log::info("Email sent successfully to: $userEmail");

        }

        return redirect()->back();
    }


// Review Product

    public function addReview(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->rating = $request->input('rating');
        $order->save();

        return redirect()->back()->with('success', 'Rating added successfully.');
    }


// Show products 
   
    public function index()
    
    {
   
        if(Auth::id())
   
    {
        return redirect('redirects');
    }
    else
        
        $data=products::all();
        return view("home",compact("data"));
    }


    
// Show Carts items
 
     public function showcart(Request $request,$id)
     {
         $count=carts::where('user_id' ,$id)->count();

        //  below code to avoid user for going to another user cart. Below function will check if id ==  id only then will showcart data otherwise will return back.


        //  below code will bring only carts data in the user table instead of bringing all products in the carts as we need it for backend purpose

         $data2=carts::select('*')->where('user_id', '=' , $id)->get();
 
         $data=carts::where('user_id' ,$id)->join('products', 'carts.product_id', '=' , 'products.id')->get();
 
         return view('showcart' ,compact('count' ,'data' , 'data2'));
   
        return redirect()->back();
     }

// Show Wishlist

    public function showwishlist(Request $request,$id)
    {
        $count2=WishList::where('user_id' ,$id)->count();
        $data3=WishList::select('*')->where('user_id', '=' , $id)->get();
        $data4=WishList::where('user_id' ,$id)->join('products', 'wish_lists.product_id', '=' , 'products.id')->get();
        return view('showwishlist' ,compact('count2' ,'data4' , 'data3', 'id'));
        return redirect()->back();
    }
       
// Show Orders

    public function showOrders()
    {
        $data = Order::all();
        return view('admin.orders', compact('data'));
    }

// User Dashboard

    public function showUserDashboard()
    {
        $data = Order::all();
        return view('user-dashboard', compact('data'));
    }

// Wishlist

    public function addwishlist(Request  $request,$id)
    {
        if(Auth::id())
        {
            $user_id=Auth::id();

            $productid=$id;

            $wishlist=new WishList;

            $wishlist->user_id=$user_id;

            $wishlist->product_id=$productid;

            $wishlist->save();

            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }

// Wishlist Item Remove

    public function remove2($id)
    {
       $data3=WishList::find($id);
       $data3->delete();
       return redirect()->back();
    }


// Create Dynamic Page for Single Product 

    public function show($id)
    {
        $product = Products::find($id);

        if ($product) {
            return view('edit', compact('product'));
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }


//Functions & Component

    public function user_dashboard(){return view("user-dashboard");}
    public function navbar(){return view("components.navbar");}
    public function create_role(){return view("create-role");}    
    public function superadmin_login(){return view("superadmin-login");}
    public function seller_dashboard(){return view("seller-dashboard");} 

    //Nav Bar -> AFTERMARKET

    public function home_appliances(){return view("home-appliances");}
    public function automotive(){return view("automotive");}
    public function furniture_and_home_decor(){return view("furniture-&-home-decor");}
    public function kids_entertainment(){return view("kids-entertainment");}

    //Nav Bar ->  CONSULTATIONS

    public function aromatherapy(){return view("aromatherapy");}
    public function medical_services(){return view("medical-services");}
    public function orthopaedic_therapy(){return view("orthopaedic-therapy");}
    public function dance_sessions(){return view("dance-sessions");}
    public function fitness_classes(){return view("fitness-classes");}

    //Nav Bar -> DISCOUNT COUPONS

    public function salon_and_spa(){return view("salon-&-spa");}
    public function food_and_drink(){return view("food-&-drink");}
    public function clothing(){return view("clothing");}
    public function home_appliances_coupons(){return view("home-appliances-coupons");}
    public function fun_and_entertainment(){return view("fun-&-entertainment");}
    public function sports_and_fitness(){return view("sports-&-fitness");}
    public function department_stores(){return view("department-stores");}
    public function costco_promo_code(){return view("costco-promo-code");}

    //Nav Bar -> LISTINGS

    public function rent_a_house(){return view("rent-a-house");}
    public function rent_an_office(){return view("rent-an-office");}
    public function buying_and_selling(){return view("buying-&-selling");}

    //Nav Bar -> NEW PRODUCTS

    public function health_and_beauty(){return view("health-&-beauty");}
    public function home_services(){return view("home-services");}
    public function fashion(){return view("fashion");}
    public function sports(){return view("sports");}

    //Nav Bar -> SERVICES 

    public function digital_world(){return view("digital-world");}
    public function beauty_and_spa(){return view("beauty-&-spa");}
    public function things_to_do(){return view("things-to-do");}
    public function restaurant(){return view("restaurant");}
    public function hotels_and_travels(){return view("hotels-&-travels");}
    public function health_and_fitness(){return view("health-&-fitness");}

    // Others

    public function rent_a_chair_in_salon_2(){return view("rent-a-chair-in-salon-2");}
    public function services(){return view("services");}
    public function shop(){return view("shop");}
    public function listing(){return view("listing");}
    public function product_review(){return view("product-review");}
    public function products(){return view("products");}
    public function homeview(){return view("home");}
    

    //Single Inner Pages

    public function chicagoland_counselors(){return view("chicagoland-counselors");}
    public function commando_machine(){return view("commando-machine");}
    public function crosstown_fitness_classes(){return view("crosstown-fitness-classes");}
    public function dance_and_sip_fitness_session(){return view("dance-&-sip-fitness-session");}
    public function headband_foldable(){return view("headband-foldable");}
    public function saptherapy_physical_rehab(){return view("saptherapy-physical-rehab");}
    public function travel_and_tour(){return view("travel-&-tour");}
    public function shop_details(){return view("shop-details");}
    public function discount_coupon(){return view("discount-coupon");}
 
    //Vendors
    
    public function ben_haul(){return view("ben-haul");}
    public function carter_grayson(){return view("carter-grayson");}
    public function harry_donald(){return view("harry-donald");}
    public function james_lincoln(){return view("james-lincoln");}
    public function john_ceamus(){return view("john-ceamus");}
    public function robert_kane(){return view("robert-kane");}
   
}
