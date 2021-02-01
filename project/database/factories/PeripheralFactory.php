<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;

use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        'name'          => $faker -> word(),
        'model'         => $faker -> ean8(),
        'price'         =>           rand(2500, 25000)/100,
        'expenditure'   =>           rand(3000, 10000)/100
    ];
});
