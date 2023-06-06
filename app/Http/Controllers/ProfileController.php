<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Order;

class ProfileController extends Controller
{
    //
    public function edit()
    {
    $user = Auth::user();
    $userorders = Order::all;
    dd($userorders);
    return view('profiles.edit', compact('user', 'orders'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        if (!empty($request->input('old_password')) && !empty($request->input('password'))) {
            // Verify the old password
            if (!Hash::check($request->input('old_password'), $user->password)) {
                return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
            }
            // Update the new password
            $user->password = Hash::make($request->input('password'));
        }    

        // add more fields here as per your requirements
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }


    public function orders()
{
    $userorders = all();
    dd($userorders);
    return view('user-dashboard', compact('userorders'));
}


    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName]);
  
        return back()->with('success', 'Avatar updated successfully.');
    }

}
