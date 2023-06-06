<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\User;

class VendorController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
        
    }

    public function allproducts()
    {
    $data5 = Products::all();

    return view("vendor.vendor_products", compact('data5'));
    }

    
    
       //  Product delete function

       public function productdelete($id)
       {
          $product=products::find($id);
  
          $product->delete();
  
          return redirect()->back();
  
       }


    public function upload(Request $request)
    {
        $data=new products;

        $image=$request->image;

        $imagename =time() .'.'. $image->getClientOriginalExtension();

        $request->image->move('product' ,$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }

    public function updateview($id)
    {
        $data=products::find($id);
        return view("vendor.updateview" ,compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data=products::find($id);
        
        $image=$request->image;

        $imagename =time() .'.'. $image->getClientOriginalExtension();

        $request->image->move('product' ,$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();

        return redirect()->back();
    }

    public function vendor_products(){
        return view("vendor.vendor_products");
    }
}
