<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Barber extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;

    protected $guard_name = 'barber';

    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'saloon_name',
        'business_type',
        'website',
        'business_address',
        'how_did_you_hear',
        'agree_terms',
        'password',
        'status'
    ];

    protected $casts = [
        'agree_terms' => 'boolean',
    ];
}
