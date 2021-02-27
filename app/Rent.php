<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'from_date',
        'to_date',
        'rent_price',
        'status',
    ];
}
