<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Year'=>$faker->year($max='now'),
        'Model'=>$faker->randomElement($array = array ('fusion','civic','fit')),
    ];
});
