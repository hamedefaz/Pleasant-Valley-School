<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\StudentMarks;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(StudentMarks::class, function (Faker $faker) {
    return [
        'student_id' => $faker->randomDigit,
        'year_id' => $faker->dateTimeThisYear,
        'class_id' => $faker->randomDigit,
        'assign_subject_id' => $faker->randomDigit,
        'exam_type_id' => $faker->randomDigit,
        'marks' => $faker->randomDigit,
        'grade' => $faker->randomLetter,
    ];
});
