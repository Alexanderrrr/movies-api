<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
      'title' => $faker->text($maxNbChars = 15),
      'director' => $faker->name($gender = 'male'),
      'imageUrl' => $faker->imageUrl($width = 90, $height = 130),
      'duration' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 3),
      'releaseDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'genre' => $faker->text($maxNbChars = 7),
    ];
});
