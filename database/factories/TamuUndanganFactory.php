<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TamuUndangan;
use Faker\Generator as Faker;

$factory->define(TamuUndangan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'instansi' => $faker->word,
        'jabatan' => $faker->word,
        'no_telp'=> $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});
