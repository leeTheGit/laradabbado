<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->name,
        'excerpt' => $faker->name,
        'content' => $faker->randomHtml(2,3),
        'keywords' => "hello,goodbye",

        'slug'=> $faker->slug,
        'url'=> $faker->url,
        'canonical_url' => $faker->url,
        'type' => 'article',
        'status' => 'published',
    ];
});
