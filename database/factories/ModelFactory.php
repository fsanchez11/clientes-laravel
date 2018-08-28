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

/** @var \Illuminate\Database\Eloquent\Factory $factory 


EJEMPLOS

		'titulo' => $faker->sentence,
        'autor' => $faker->name,
        'fecha_publicacion' => $faker->dateTime,

*/
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Client::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'photo' => $faker->name,
        'phone' => rand(1,1000000),
        'nacimiento' => $faker->dateTime,
    ];
});


$factory->define(App\Models\Compra::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'cantidad' => rand(1,1000),
        'date_compra' => $faker->dateTime,
        'date_render' => $faker->dateTime,
        'client_id' => DB::table('clients')->select('id')->inRandomOrder()->first()->id,
    ];
});

