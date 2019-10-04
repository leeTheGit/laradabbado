<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;
use Lib\l;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'filename' => $faker->name,
        'filepath' => $faker->name,
        'filesize' => $faker->numberBetween($min = 1000, $max = 900000),
        'filetype' => $faker->mimeType,
        'width' => $faker->numberBetween($min = 1000, $max = 900000),
        'height' => $faker->numberBetween($min = 1000, $max = 900000),
        'type' => "image",
        'url'=> $faker->imageUrl($width = 640, $height = 480, 'people')
    ];
});



