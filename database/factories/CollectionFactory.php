<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Collection::class, function (Faker $faker) {
    $collection_number = $faker->randomNumber . '' . $faker->randomLetter;
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'collector' => $faker->name,
        'number' => $collection_number,
        'date' => $faker->date,
        'location' => $faker->address,
        'coluuid' => $faker->uuid,
        'created_at' => $date_time,
        'updated_at' => $date_time,

    ];
});
