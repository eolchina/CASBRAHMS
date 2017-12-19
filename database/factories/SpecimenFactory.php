<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Specimen::class, function (Faker $faker) {
    $specimen_number = $faker->randomNumber . '' . $faker->randomLetter;
    $specimen_barcode = 'PE' . '' . $faker->randomNumber;
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'barcode' => $specimen_barcode,
        'collector' => $faker->name,
        'number' => $specimen_number,
        'date' => $faker->date,
        'location' => $faker->address,
        'smuuid' => $faker->uuid,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
