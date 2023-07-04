<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Order;
  
class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function show()
    {
       $seller = auth()->user(); // Assuming the logged-in user is the seller
    
       $orders = Order::select(\DB::raw("COUNT(*) as count"))
           ->where('seller_name', $seller->name) // Filter orders by the seller's name
           ->whereYear('created_at', date('Y'))
           ->groupBy(\DB::raw("MONTH(created_at)"))
           ->pluck('count');
           
       return view('chart', compact('orders'));
    }
}
