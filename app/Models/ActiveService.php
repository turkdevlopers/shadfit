<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveService extends Model
{
    use HasFactory;
    public function paid()
    {
        return $this->belongsTo('Payed');
    }
}
