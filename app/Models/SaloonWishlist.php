<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaloonWishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'saloon_id'];

    /**
     * Get the user that owns the wishlist entry.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the saloon that is wishlisted.
     */
    public function saloon()
    {
        return $this->belongsTo(Barber::class);
    }
}
