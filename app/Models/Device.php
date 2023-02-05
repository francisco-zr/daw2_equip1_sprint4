<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public function type() {
        return $this->belongsTo(TypeDevice::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'brand',
        'model',
        'mac_ethernet',
        'mac_wifi',
        'description',
        'state',
        'tag',
        'serial_number',
        'type_device_id',
        'user_id',
        'hidden'
    ];
}
