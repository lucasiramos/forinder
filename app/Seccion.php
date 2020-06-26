<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';

    public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
}
