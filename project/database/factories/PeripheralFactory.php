<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;

use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        'name'          => $faker -> word(),
        'model'         => $faker -> ean8(),
        'price'         => $faker -> randomFloat($nbMaxDecimals = 2, $min = 25, $max = 250),
        'expenditure'   => $faker -> randomFloat($nbMaxDecimals = 2, $min = 5, $max = 50)
    ]; 
});
