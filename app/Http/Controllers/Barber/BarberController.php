<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarberRegisterRequest;
use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BarberController extends Controller
{
    public function home()
    {
        return view('Barber.dashboard');
    }


    public function createBarberPage()
    {
        return view('admin.barbers.create');
    }

    public function create(BarberRegisterRequest $request)
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
            'status' => '1',
        ])->syncRoles(['barber']);

        return redirect()->route('admin.barber.list')->with('success', 'Registration successful. ');
    }

    public function showRegisterForm()
    {
        return view('Users.web.Saloons.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:barbers,email|max:255',
            'mobile_number' => 'required|numeric|digits:10|unique:barbers,mobile_number',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|numeric|digits_between:4,10',
            'country' => 'required|string|max:100',
            'saloon_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'business_address' => 'required|string|max:255',
            'how_did_you_hear' => 'required|in:Website,Referral,Social Media,Advertisement,Other',
            'agree_terms' => 'required|accepted',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Store the barber in the database
        $barber = Barber::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'saloon_name' => $request->saloon_name,
            'business_type' => $request->business_type,
            'website' => $request->website,
            'business_address' => $request->business_address,
            'how_did_you_hear' => $request->how_did_you_hear,
            'password' => bcrypt($request->password),
            'status' => 1, // Default status as active
        ]);

        return redirect()->route('barber.login')->with('success', 'Registration successful! Please log in.');
    }
}
