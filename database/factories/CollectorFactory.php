<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Collector::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'institute' => $faker->company,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
