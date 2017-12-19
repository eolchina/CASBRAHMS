<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Herbarium::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'code' => $faker->stateAbbr,
        'name' => $faker->company,
        'curator' => $faker->name,
        'email' => $faker->email,
        'description' => $faker->text,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
