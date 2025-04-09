<?php

namespace App\View\Composers;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BarberOrderComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $barber = Auth::guard('barber')->user();
        $count = 0;
        if (!$barber) {
            $view->with(['count' => 0, 'order_items' => []]);
        } else {
            $orderItems = OrderItem::with('order.user', 'service')->where(['barber_id' => $barber->id, 'read_notification' => 0])->get();
            $count = $orderItems->count();

            $view->with(['count' => $count, 'order_items' => $orderItems]);
        }
    }
}
