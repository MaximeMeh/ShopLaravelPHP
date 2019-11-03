<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->name,
        'model' => Str::random(10),
        'produced_on' => $faker->text,
    ];
});
