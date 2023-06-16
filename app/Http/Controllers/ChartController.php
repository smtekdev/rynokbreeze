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
       $orders = Order::select(\DB::raw("COUNT(*) as count"))
                   ->whereYear('created_at', date('Y'))
                   ->groupBy(\DB::raw("Month(created_at)"))
                   ->pluck('count');
       return view('chart', compact('orders'));
    }
}
