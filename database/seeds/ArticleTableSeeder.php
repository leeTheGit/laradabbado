<?php

use Illuminate\Database\Seeder;
use Lib\l;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($data)
    {
        foreach ($data as $user) {
            factory(App\Article::class, 5)->create(['user_id' => $user]);
        }
    }
}
