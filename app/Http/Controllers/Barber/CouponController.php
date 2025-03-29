<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::latest()->paginate(10);
        return view('Barber.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('Barber.coupons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:coupons,code|max:255',
            'discount' => 'required|numeric|min:0',
            'expires_at' => 'nullable|date|after:now',
        ]);

        Coupon::create([
            'code' => $request->code,
            'discount' => $request->discount,
            'expires_at' => $request->expires_at,
        ]);

        return redirect()->route('barber.coupons.index')->with('success', 'Coupon created successfully.');
    }

    public function edit(Coupon $coupon)
    {
        return view('barber.coupons.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'code' => 'required|string|unique:coupons,code,' . $coupon->id . '|max:255',
            'discount' => 'required|numeric|min:0',
            'expires_at' => 'nullable|date|after:now',
        ]);

        $coupon->update([
            'code' => $request->code,
            'discount' => $request->discount,
            'expires_at' => $request->expires_at,
        ]);

        return redirect()->route('barber.coupons.index')->with('success', 'Coupon updated successfully.');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('barber.coupons.index')->with('success', 'Coupon deleted successfully.');
    }
}
