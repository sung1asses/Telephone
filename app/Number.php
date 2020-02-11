<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
	protected $guarded = [
		'id'
	];
    public function institute()
    {
    	return $this->belongsTo('\App\Institute');
    }
}
