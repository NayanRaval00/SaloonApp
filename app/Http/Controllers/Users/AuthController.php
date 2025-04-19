<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Users.web.auth.login');
    }


    public function showRegisterForm()
    {
        return view('Users.web.auth.register');
    }

    public function register(UsersRegisterRequest $request)
    {
        $Users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'password' => Hash::make($request->password),
            'status' => '1',
        ])->syncRoles(['user']);

        return redirect()->route('user.web.home')->with('success', 'Registration successful!!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $Users = User::where('email', $request->email)->first();

        if (!$Users) {
            return back()->withErrors(['email' => 'Invalid login credentials.']);
        }

        if ($Users->status == 0) {
            return back()->with('error', 'Access Denied! Your account is not approved yet.');
        }

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user.web.home')->with('success','Login Successfully!');
        }

        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user.web.login')->with('success','Logout Successfully!');
    }
}
