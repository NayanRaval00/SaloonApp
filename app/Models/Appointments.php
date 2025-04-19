<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'appointment_time',
        'salon',
        'location',
        'message',
        'status'
    ];

    protected $casts = [
        'appointment_time' => 'datetime',
    ];


    public function barber()
    {
        return $this->belongsTo(Barber::class, 'salon');
    }
}
