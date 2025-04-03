<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function getChartData(Request $request)
    {
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', 'all');

        $query = Order::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('date')
            ->orderBy('date');

        if ($month !== 'all') {
            $query->whereMonth('created_at', $month);
        }

        $orders = $query->get();

        return response()->json([
            'labels' => $orders->pluck('date'),
            'orders' => $orders->pluck('total'),
        ]);
    }
}
