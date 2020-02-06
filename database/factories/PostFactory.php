<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 100),
        'title' => $faker->sentence(1, true),
        'body' => $faker->sentences(10, true)
    ];
});

$factory->state(Post::class, 'published', function (Faker $faker) {
    return [
        'published_at' => $faker->dateTimeBetween('-1 years')
    ];
});

$factory->state(Post::class, 'draft', function (Faker $faker) {
    return [
        'published_at' => null
    ];
});
