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
        'saloon_name',
        'mobile_number',
        'city',
        'state',
        'country',
        'email',
        'password',
        'status',
    ];
}
