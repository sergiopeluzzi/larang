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

$factory->define(Larang\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Larang\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(Larang\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => $faker->name,
        'client_id' => $faker->name,
        'name' => $faker->name,
        'description' => $faker->text(200),
        'progress' => $faker->randomFloat(2, 0, 100),
        'status' => $faker->randomElements(['Desenvolvimento', 'An�lise', 'Finalizado', 'Testes']),
        'due_date' => $faker->dateTime,
    ];
});