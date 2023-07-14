<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'referral_code' => ['nullable', 'exists:users,referral_code'],
        ]);

        $referralCode = $request->referral_code;

        // Generate referral code
        $userReferralCode = Str::random(8); 

        if ($referralCode) {
            $referrer = User::where('referral_code', $referralCode)->first();

            if ($referrer) {
                $referrer->increment('referral_count');
                $userReferralCode =  Str::random(8); 
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),            
            'phone' => $request->phone,
            'address' => $request->address,
            'referral_code' => $userReferralCode, // Set the referral code for the new user
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    // Redeem Points
    

    /**
     * Display the vendor registration view.
     *
     * @return \Illuminate\View\View
     */
    public function createVendor()
    {
        return view('auth.vregister');
    }

    /**
     * Handle an incoming vendor registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeVendor(Request $request)
    {
        $request->validate([
            'bussinesname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string'],
            'bussinessaddress' => ['required', 'string']
        ]);

        $user = User::create([
            'name' => $request->bussinesname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->bussinessaddress,
            'usertype' => 2,
        ]);
        

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('custom');

        
    }
}
