<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    public function user(){
		return $this->belongsTo('App\User', 'creado_por');
	}
}