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

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'email' => $faker->safeEmail,
        'username' => $faker->username,
        'password' => bcrypt('qwerty123'),
        'name' => $faker->name,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) use ($factory) {

	return [
		'title' => $faker->sentence(12),
		'content' => $faker->realText,
		'author_id' => factory(App\User::class)->create()->id
	];
});