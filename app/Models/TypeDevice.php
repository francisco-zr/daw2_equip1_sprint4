<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDevice extends Model
{
    use HasFactory;

    public function devices() {
        return $this->hasMany(Device::class);
    }

    protected $fillable = [
        'name'
    ];
}
