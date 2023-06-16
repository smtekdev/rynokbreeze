<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function stripePost(Request $request)
    {
        try {
            Stripe\Stripe::setApiKey(env('sk_test_51NIAIxB5vlQfw5KsXvPxRiagZ3aqGQyECC6rOllCLXgyPsRveeCZXUl3bixD1vgrcAuLMB3FEF6jzE3g0Ibsx7DS00HfxrGhK6'));
            Stripe\Charge::create([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Rynokbay"
            ]);
        
            Session::flash('success', 'Payment successful!');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
        }
    
        return back();
    }
    

}