<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'from_date',
        'to_date',
        'rent_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
    	return $this->belongsTo(Cars::class);
    }

}
