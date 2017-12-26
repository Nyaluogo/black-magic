<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Carbon\Carbon;

$factory->define(Black_Magik\User::class, function (Faker\Generator $faker) {
    static $password;
    $name = $faker->name;
    $date = Carbon::today()->format('Y-m-d');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'slug' => str_slug($name),
        'gender' => 1,
        'DOB' => $date,
        'avatar' => 'public/defaults/avatars/male.png',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Black_Magik\Profile::class, function (Faker\Generator $faker)
{
    $type_of_artist = 'hobbyist';
    return [
        'country' => $faker->city,
        'biography' => $faker->paragraph(4)
    ];
});
