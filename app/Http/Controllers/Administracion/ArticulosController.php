<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Articulo;

class ArticulosController extends Controller
{
	public function index(){
		echo('proximamente todos los artículos aquí');
	}

	public function articulo($id){
		$articulo = Articulo::find($id);

		return view('administracion.articulo',[
			'articulo' => $articulo
		]);
	}
}
