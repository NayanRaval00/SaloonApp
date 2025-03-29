<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $userId = Auth::guard('web')->user()->id;
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }

        $request->validate([
            'service_id' => 'required|exists:services,id',
        ]);

        $service = Service::findOrFail($request->service_id);
        $totalPrice = $service->price;

        // Cart::updateOrCreate(
        //     ['user_id' => $userId, 'service_id' => $request->service_id],
        //     ['price' => $totalPrice, 'date_time' => $request->datetime]
        // );

        Cart::create([
            'user_id' => $userId,
            'service_id' => $request->service_id,
            'price' => $totalPrice,
            'date_time' => $request->datetime,
            'slot_id' => $request->slot
        ]);

        return redirect()->back()->with('success', 'Service added to cart.');
    }

    public function view()
    {
        $userId = Auth::guard('web')->user()->id;

        $cartItems = Cart::with('service')->where('user_id', $userId)->get();
        return view('Users.cart.view', compact('cartItems'));
    }
}
