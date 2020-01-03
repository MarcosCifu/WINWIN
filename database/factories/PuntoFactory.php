<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Punto;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Punto::class, function (Faker $faker) {
    return [
        //
        'puntos'        => $faker->randomDigit,
        'jugador_id'    => factory('App\User')->create()->id,
    ];
});
