<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    use HasFactory;
    public function order()
    {
        return $this->hasOne(\App\Models\Order::class);
    }
    public function plan()
    {
        return $this->belongsTo(\App\Models\Plan::class);
    }
}
