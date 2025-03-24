<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarberRegisterRequest;
use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // if (Auth::guard('barber')->user()) {
        //     return redirect()->route('barber.dashboard');
        // }
        return view('Barber.auth.login');
    }


    public function showRegisterForm()
    {
        return view('Barber.auth.register');
    }

    public function register(BarberRegisterRequest $request)
    {
        $barber = Barber::create([
            'name' => $request->name,
            'saloon_name' => $request->saloon_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'password' => Hash::make($request->password),
            'status' => '0',
        ])->syncRoles(['barber']);

        return redirect()->route('barber.login')->with('success', 'Registration successful. Please wait for approval.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $barber = Barber::where('email', $request->email)->first();

        if (!$barber) {
            return back()->withErrors(['email' => 'Invalid login credentials.']);
        }

        if ($barber->status == 0) {
            return back()->with('error', 'Access Denied! Your account is not approved yet.');
        }

        if (Auth::guard('barber')->attempt($credentials)) {
            return redirect()->route('barber.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }



    public function logout()
    {
        Auth::guard('barber')->logout();
        return redirect()->route('barber.login');
    }
}
