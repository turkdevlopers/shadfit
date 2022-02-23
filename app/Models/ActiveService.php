<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveService extends Model
{
    use HasFactory;
    protected $table = 'activeservice';
    public function payed()
    {
        return $this->belongsTo(\App\Models\Payed::class);
    }
}
