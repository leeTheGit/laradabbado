<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Lib\l;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($data)
    {
        factory(App\Media::class, 5)->create(['user_id' => Arr::random($data)]);
        factory(App\Media::class, 5)->create(['user_id' => Arr::random($data)]);
        factory(App\Media::class, 5)->create(['user_id' => Arr::random($data)]);
        factory(App\Media::class, 5)->create(['user_id' => Arr::random($data)]);
        factory(App\Media::class, 5)->create(['user_id' => Arr::random($data)]);
    }
}
