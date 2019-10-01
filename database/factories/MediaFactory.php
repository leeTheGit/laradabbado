<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;
use Lib\l;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'filename' => $faker->name,
        'url'=> $faker->imageUrl($width = 640, $height = 480, 'people')
    ];
});
