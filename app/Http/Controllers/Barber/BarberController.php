<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarberRegisterRequest;
use App\Models\Barber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $imagePath = $request->file('profile_image')->store('barbers', 'public');

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
            'profile_image' => $imagePath,
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


    public function edit()
    {
        $barber = Auth::guard('barber')->user(); // Get the logged-in barber
        return view('Barber.auth.profile', compact('barber'));
    }

    public function update(Request $request)
    {
        $barberId = Auth::guard('barber')->user()->id;
        $barber = Barber::where('id', $barberId)->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'saloon_name' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'password' => 'nullable|min:6|confirmed',
            'bank_name' => 'nullable|string|max:255',
            'bank_account_number' => 'nullable|numeric|digits_between:10,20|unique:barbers,bank_account_number,' . $barber->id,
            'bank_account_holder_name' => 'nullable|string|max:255',
            'bank_address' => 'nullable|string|max:255',
            'bank_ifsc_code' => 'nullable|string|max:11',
        ]);

        $updateData = [
            'name' => $request->name,
            'saloon_name' => $request->saloon_name,
            'bank_name' => $request->bank_name,
            'bank_account_number' => $request->bank_account_number,
            'bank_account_holder_name' => $request->bank_account_holder_name,
            'bank_address' => $request->bank_address,
            'bank_ifsc_code' => $request->bank_ifsc_code,
        ];

        if ($request->hasFile('profile_image')) {
            if ($barber->profile_image) {
                Storage::disk('public')->delete($barber->profile_image);
            }
            $updateData['profile_image'] = $request->file('profile_image')->store('barbers', 'public');
        }

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $barber->update($updateData);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
