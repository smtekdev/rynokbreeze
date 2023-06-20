<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Products;
use App\Models\Order;
use App\Models\User;
use App\Models\Coupon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class VendorController extends Controller
{
   

    //  Add new product  with function of creating view file for uploaded product


    public function upload(Request $request)
    {
        $product = new Products();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->back();
    }

    // Edit/Update the product

    public function updateview($id)
    {
        $data = products::findOrFail($id);
        return view("vendor.updateview" ,compact("data"));
    }

  
    public function update(Request $request, $id)
    {
        $data = products::find($id);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $data->image = $imagename;
        }
        $data->title = $request->filled('title') ? $request->title : $data->title;
        $data->price = $request->filled('price') ? $request->price : $data->price;
        $data->discounted_price = $request->filled('discounted_price') ? $request->discounted_price : $data->discounted_price;
        $data->description = $request->filled('description') ? $request->description : $data->description;

        $data->save();

        return redirect()->back();
    }



    // Product View
    public function vendor_products(){
        return view("vendor.vendor_products");
    }

    // Product page 

    public function showProductTemplate()
    {
        $product = Products::all();
        return view('products.template', compact('data'));
    }

    // Product Count

    public function getProductsWithVendorsCount()
    {
        $count7 = Product::whereHas('vendor')->count();
    
        return view('vendorhome', ['count7' => $count7]);
    }
    
    
    //  Product delete function

    public function productdelete($id)
    {
       $product=products::find($id);
  
       $product->delete();
  
       return redirect()->back();
  
    }    

     // Updating delivery status 


     public function updateDeliveryStatus(Request $request)
     {
         $deliveryStatus = $request->input('delivery_status');
         Order::query()->update(['delivery_status' => $deliveryStatus]);
         return redirect()->back()->with('success', 'Delivery status updated successfully.');
     }

     
    // View Users

    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
        
    }

    // View Products 

    public function allproducts()
    {
    $data5 = Products::all();

    return view("vendor.vendor_products", compact('data5'));
    }



    // Create Discount Coupon


    public function storeCoupon(Request $request)
    {
        $coupon = new Coupon([
            'code' => $request->input('coupon'),
            'discount' => $request->input('discount'),
        ]);

        $coupon->save();

        return back()->with('success', 'Coupon created successfully.');
    }

    public function indexCoupons()
    {
        $coupons = Coupon::all();

        return view('coupons', compact('coupons'));
    }

    public function createCoupon()
{
    return view('coupons.create');
}

    // Check Coupon is valid

    public function store(Request $request)
{
    // validate checkout fields

    if ($request->has('coupon')) {
        $coupon = Coupon::where('code', $request->input('coupon'))->first();

        if ($coupon) {
            $discount = $coupon->discount;
            $totalPrice = $cartTotal - $discount;
        }
    }

    // complete checkout process
}

// View existing coupon



    public function coupons()
    {
        $coupons = Coupon::all();
        return view('coupons', ['coupons' => $coupons]);
    }
    
    // Delete Coupon
    
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
    
        if (!$coupon) {
            return redirect()->back()->with('error', 'Coupon not found');
        }
    
        $coupon->delete();
    
        return redirect()->back()->with('success', 'Coupon deleted successfully');
    }

    // Redeem Coupon Code

    public function applyCoupon(Request $request)
{
    $couponCode = $request->input('couponCode');
    $coupon = Coupon::where('code', $couponCode)->first();

    if (!$coupon) {
        return redirect()->back()->withErrors(['Invalid coupon code']);
    }

    // Store discount amount in session data
    session(['discountAmount' => number_format($coupon->discount, 2)]);

    return redirect()->back();
}

public function vendorOrders(){return view('vendor.vendororders');}
public function editprofile(){return view('vendor.editprofile');}

}


