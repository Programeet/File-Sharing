<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Usuario::class, function (Faker\Generator $faker) {

    return [
        'nick' => $faker->firstNameMale(),
        'email' => $faker->unique()->safeEmail,
        'password' => str_random(20),
        'tipo' => $faker->numberBetween($min = 1, $max = 2),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Genero::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->company,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Archivo::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'artista' => $faker->name,
        'fecha_subida' => $faker->dateTime($max = 'now'),
        'numero_descargas' => $faker->numberBetween($min = 1, $max = 2000),
        'size' => $faker->numberBetween($min = 1024, $max = 2048),
        'genero_id' => $faker->numberBetween($min = 1, $max = 12),
        'usuario_id' => $faker->numberBetween($min = 1, $max = 12),
    ];
});
