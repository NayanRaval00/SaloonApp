<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'service_id', 'barber_id', 'duration', 'date_time', 'price', 'slot_id', 'read_notification'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    public function slot()
    {
        return $this->belongsTo(Slots::class);
    }
}
