<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payed extends Model
{
    use HasFactory;
    protected $table = 'payed';
    public function activeservice()
    {
        return $this->hasOne(\App\Models\ActiveService::class);
    }
    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
}
