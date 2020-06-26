<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

use App\User;
use App\Articulo;

class PruebitaController extends Controller
{
    public function index(){
    	$devuelvo = [];

    	////////////////////////////////////////////////////////////////////////////////////
    	// Todos los usuarios con sus artículos y campos específicos en artículos, funca
    	/*$usuarios = User::all();

    	if(count($usuarios) >= 1){
			foreach ($usuarios as $usuario) {
				// Con values()->all() traigo todas las columnas de artículos
				//$articulosDelUsuario = $usuario->articulos->values()->all();

				// Con map->only puedo elegir que columnas mostrar
				$articulosDelUsuario = $usuario->articulos->map->only(['id','nombre','cuerpo']);

				$unUsuario = [
					'id' => $usuario->id, 
					'nombre' => $usuario->name, 
					'email' => $usuario->email,
					'articulos' => $articulosDelUsuario
				];

				array_push ($devuelvo, $unUsuario);
			}
		}*/

    	//////////////////////////////////////////////////////////////////
    	// Artículos conectando con su autor, funca
    	/* $articulos = Articulo::where('id', '<', 11)->get();

    	foreach ($articulos as $articulo) {
    		$unArticulo = [
    			'id' => $articulo->id,
    			'nombre' => $articulo->nombre,
    			'autor' => $articulo->user->name // Sin paréntesis en la unión con user!
    		];

    		array_push ($devuelvo, $unArticulo);
    	} */

    	//////////////////////////////////////////////////////////////////
    	// Solo usuarios funca
    	/*$usuarios = User::all();

    	if(count($usuarios) >= 1){
			foreach ($usuarios as $usuario) {
				//$articulosDelUsuario = $usuario->articulos()->values()->toArray();

				//var_dump($articulosDelUsuario);
				//echo('<hr/>');

				$unUsuario = [
					'id' => $usuario->id, 
					'nombre' => $usuario->name, 
					'email' => $usuario->email,
				];

				array_push ($devuelvo, $unUsuario);
			}
		}*/

		return $devuelvo;
    }
}