<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        $userID = Auth::guard('web')->user()->id;

        $cartItems = Cart::where('user_id', $userID)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty.');
        }

        // Calculate total price
        $totalPrice = $cartItems->sum('price');

        // Create Order
        $order = Order::create([
            'user_id' => $userID,
            'total_price' => $totalPrice,
            'status' => 'pending'
        ]);

        // Move cart items to order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'service_id' => $item->service_id,
                'barber_id' => $item->service->barber_id,
                'date_time' => $item->date_time,
                'price' => $item->price,
                'slot_id' => $item->slot_id

            ]);
        }

        // Clear cart after checkout
        Cart::where('user_id', $userID)->delete();

        return redirect()->route('orders.list')->with('success', 'Order placed successfully!');
    }

    public function userOrders()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->get();
        return view('Users.orders.list', compact('orders'));
    }

    public function show($orderId)
    {
        $order = Order::with('items.service.barber')->findOrFail($orderId);

        return view('Users.orders.details', compact('order'));
    }

    public function barberOrders()
    {
        $orders = OrderItem::with('slot', 'order.user')->whereHas('barber', function ($query) {
            $query->where('id', Auth::guard('barber')->id());
        })->latest()->paginate(10);

        return view('Barber.orders.index', compact('orders'));
    }

    public function adminOrders()
    {
        $orders = Order::latest()->paginate(10);
        return view('Admin.orders.index', compact('orders'));
    }

    public function approveOrder($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->update(['status' => 'confirmed']);

        return redirect()->back()->with('success', 'Order confirmed successfully!');
    }
}
