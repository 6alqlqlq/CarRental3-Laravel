<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'image',
        'year',
        'capacity',
        'doors',
        'engine',
        'gearbox',
        'status',
        'hire_cost'

    ];
}
