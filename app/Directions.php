<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directions extends Model
{
    protected $table = 'directions';

    protected $fillable = ['step_no', 'content'];

    public function recipe()
    {
    	return $this->belongsTo('App\Recipe');
    }
}
