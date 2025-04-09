<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestOffers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'discount', 'start_date', 'end_date', 'created_by'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
