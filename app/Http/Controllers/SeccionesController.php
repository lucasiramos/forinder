<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seccion;


class SeccionesController extends Controller
{
    public function MuestraSeccion($slug){
    	if(Seccion::where('slug', $slug)->count() > 0){
    		$seccion = Seccion::where('slug', $slug)->first();

    		return view('secciones.seccion', [
	            'seccion' => $seccion
	        ]);
    	}else{
    		// Redirigir a 404
    		echo 'No existe';
    	}    	
    }
}
