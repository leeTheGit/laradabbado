<?php

use Illuminate\Database\Seeder;
use Lib\l;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        l::og('seeding the media');
        factory(App\Media::class, 5)->create();
    }
}
