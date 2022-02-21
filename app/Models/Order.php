<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function payed()
    {
        return $this->hasOne('Payed');
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
}
