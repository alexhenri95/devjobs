<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categoria;
use App\Experiencia;
use App\Sueldo;
use App\Ubicacion;
use App\User;
use App\Vacante;
use Faker\Generator as Faker;

$factory->define(Vacante::class, function (Faker $faker) {
    
    $title = $this->faker->sentence(5);
    $description = $this->faker->sentence(100);
    $categoria = Categoria::all()->random();
    $experiencia = Experiencia::all()->random();
    $ubicacion = Ubicacion::all()->random();
    $sueldo = Sueldo::all()->random();
    $usuario = User::all()->random();

    return [
        'titulo' => $title,
        'descripcion' => $description,
        'imagen' => 'vacantes/' . $this->faker->image('public/storage/vacantes', 640,480, null, false),
        'skills' => 'HTML5,CSS3,CSSGrid,Flexbox',
        'activo' => true,
        'user_id' => $usuario->id,
        'ubicacion_id' => $ubicacion->id,
        'sueldo_id' => $sueldo->id,
        'experiencia_id' => $experiencia->id,
        'categoria_id' => $categoria->id,
    ];
});
