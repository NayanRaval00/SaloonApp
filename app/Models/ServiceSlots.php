<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSlots extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'slot_id', 'status'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
