<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Model\EmployeeSalaryLog;

$factory->define(EmployeeSalaryLog::class, function (Faker $faker) {
    return [
        'employee_id' => $faker->randomDigit,
        'previous_salary' => $faker->randomDigit,
        'present_salary' => $faker->randomDigit,
        'increment_salary' => $faker->randomDigit,
        'effected_date' => $faker->date
    ];
});
