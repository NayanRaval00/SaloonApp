<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'barber_id',
        'category_id',
        'price',
        'time',
        'created_by',
        'status',
    ];

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
