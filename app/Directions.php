<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directions extends Model
{
    protected $table = 'directions';

    public function recipe()
    {
    	return $this->belongsTo('App\Recipe');
    }
}
