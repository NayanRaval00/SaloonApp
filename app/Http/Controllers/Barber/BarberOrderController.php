<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarberOrderController extends Controller
{
    public function getBarberChartData(Request $request)
    {
        $barberId = Auth::guard('barber')->user()->id;
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', 'all');

        $query = OrderItem::where('barber_id', $barberId)
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->selectRaw('DATE(order_items.date_time) as date, COUNT(*) as total_orders')
            ->whereYear('order_items.date_time', $year)
            ->groupBy('date')
            ->orderBy('date');

        if ($month !== 'all') {
            $query->whereMonth('order_items.date_time', $month);
        }

        $orders = $query->get();

        return response()->json([
            'labels' => $orders->pluck('date'),
            'orders' => $orders->pluck('total_orders'),
        ]);
    }

    public function updateNotification($id)
    {
        $orderItem = OrderItem::where('id', $id)->first();

        if (!$orderItem) {
            return back()->withErrors(['item' => 'Order Item Not found.']);
        }

        $orderItem->update([
            'read_notification' => 1
        ]);

        return redirect()->back()->with('success', 'Order notification read successfully!');
    }
}
