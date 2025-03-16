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


    public function createBarberPage() {
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
}
