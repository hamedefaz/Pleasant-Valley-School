<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\StudentClass;
use Faker\Generator as Faker;

$factory->define(StudentClass::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigit,
        'name' => $faker->name,
    ];
});
