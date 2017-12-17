<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->string(),
        'institute' => $faker->string(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
