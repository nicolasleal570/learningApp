<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'MYSQL', 'DISEñO WEB', 'JAVA', 'HACKING', 'API REST', 'CSS', 'SASS']),
        'description' => $faker->sentence
    ];
});
