<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\clients;
use Faker\Generator as Faker;

$factory->define(clients::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'code' => $faker->firstNameMale,
        'phone' => $faker->numberBetween(100000, 1000000),
        'joindate' => $faker->date(),
        'unactivedate' =>$faker->date(),
        'email' => $faker->unique()->safeEmail,
        'npwp' =>$faker->numberBetween(100000, 1000000),
        'ktp' => $faker->numberBetween(100000, 1000000),
        'telepon' => $faker->numberBetween(100000, 1000000),
        'alamat' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
     
    ];
});
