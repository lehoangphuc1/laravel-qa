<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)),"."), //tao ra du lieu sentence mau
        'body' => $faker->paragraphs(rand(3,7),true), //tao ra du lieu doan van mau
        'views' => rand(0,10),
        'answers' => rand(0,10),
        'votes' => rand(-3,10),
    ];
});
