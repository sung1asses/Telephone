<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
	protected $guarded = [
		'id'
	];
    public function numbers()
    {
    	return $this->hasMany('\App\Number');
    }
}
