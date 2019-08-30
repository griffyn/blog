<?php

use Faker\Generator as Faker;
use App\Models\User;
use Ramsey\Uuid\Uuid;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'uuid' => Uuid::uuid4(),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make(str_random(10)), // secret
        'remember_token' => str_random(10),
    ];
});
