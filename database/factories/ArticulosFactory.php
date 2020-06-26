<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
	$htmlParaCuerpo = $faker->randomHtml(3,8);

	$htmlParaCuerpo = str_replace("<html>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</html>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<head>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</head>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<title>","<p>", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</title>","</p>", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<body>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</body>","", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<form","<p", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</form>","</p>", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<label","<span", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("</label>","</span>", $htmlParaCuerpo);
	$htmlParaCuerpo = str_replace("<input","<br", $htmlParaCuerpo);

	$htmlParaBusqueda = strip_tags($htmlParaCuerpo);

    return [
        'nombre' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cuerpo' => $htmlParaCuerpo,
        'busqueda' => $htmlParaBusqueda,
        'fecha_publicacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'publicado' => $faker->numberBetween($min = 0, $max = 1),
        'creado_por' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
