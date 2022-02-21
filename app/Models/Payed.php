<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payed extends Model
{
    use HasFactory;
    public function activeservice()
    {
        return $this->hasOne('ActiveService');
    }
    public function order()
    {
        return $this->belongsTo('Order');
    }
}
