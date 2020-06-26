<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Articulo;

class AdministracionController extends Controller
{
	public function Index(){
		$articulos = Articulo::orderBy('fecha_publicacion', 'desc')
            			->take(4)
            			->get();

		return view('administracion.index',[
			'articulos' => $articulos
		]);
	}

	/* public function Index(){
		$seccion = Seccion::find(1);

		return view('administracion.index',[
			'seccion' => $seccion
		]);
	}

	public function grabar(Request $request){
		var_dump($request->input('primero'));
		var_dump($request->input('segundo'));
		var_dump($request->input('mceContent'));

		die();
	}

	public function carga(){
		$unHtml = "<img src='lalala.png'/><p>Mi Receta:</p><ul><li>Hola que tal.</li><li>Chau.</li></p><iframe width='420' height='315' src='https://www.youtube.com/embed/tgbNymZ7vqY'></iframe>";
		echo('@' . strip_tags($unHtml) . '@');
		die();

		return view('administracion.carga');
	} */

	//public function procesar(Request $request){
		//var_dump($request);
		/*request()->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/
		/**/



		/* $imageName = time().'.'.$request->adjunto->extension();

		echo($request->adjunto->extension());
		echo($request->adjunto->getClientOriginalExtension());

		echo('<br/><br/>');

		echo($request->adjunto->getClientOriginalName());

		echo('<br/><br/>Nombre:<br/>');

		echo(pathinfo($request->adjunto->getClientOriginalName(), PATHINFO_FILENAME));

		echo('<br/><br/>');

		// $request->adjunto->move(public_path('imagenes'), $imageName);

		echo(public_path('imagenes') . '\noticias');
		echo('<br/><br/>');
		echo(base_path('public\imagenes\noticias')); */	

		//die();

		//var_dump(request()->image->getClientOriginalExtension());
		//$imageName = time().'.'.request()->image->getClientOriginalExtension();
		//echo("2");
		//request()->image->move(public_path('imagenes'), $imageName);
		//echo("3");
		//die();
	//}
}
