<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalty extends Model
{
    protected $fillable = [
        'rent_id',
        'from_date',
        'to_date',
        'total',
    ];
    public function rent()
    {
    	return $this->belongsTo(Rent::class);
    }

    public function car()
    {
    	return $this->belongsTo(Cars::class);
    }
    
}
           