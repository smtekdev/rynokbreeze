<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
    // Enter Your Stripe Secret
    \Stripe\Stripe::setApiKey('sk_test_51NIAIxB5vlQfw5KsXvPxRiagZ3aqGQyECC6rOllCLXgyPsRveeCZXUl3bixD1vgrcAuLMB3FEF6jzE3g0Ibsx7DS00HfxrGhK6');

    session_start(); 

    if (isset($_SESSION['effort'])) { 
        $effort = $_SESSION['effort']; 
    } else {
        $effort = 5; 
    }

    $amount = 100;
    $amount *= 100;
    $amount = (int) $amount;

    $payment_intent = \Stripe\PaymentIntent::create([
        'description' => 'Stripe Test Payment',
        'amount' => $amount,
        'currency' => 'USD',
        'description' => 'Payment From All Customer',
        'payment_method_types' => ['card'],
    ]);
    $intent = $payment_intent->client_secret;

    $total = $request->session()->get('total');

    return view('checkout.credit-card', compact('intent', 'total'));
    }


    public function afterPayment()
    {
        session()->flash('message', 'Payment Received, Thank you for using our services.');
        session()->flash('redirect', route('login'));
        return redirect()->back();
    }
}
