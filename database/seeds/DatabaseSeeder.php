<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(Groups::class);
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('user_roles')->truncate();
        DB::table('groups')->truncate();
        DB::table('user_groups')->truncate();
        DB::table('media')->truncate();
        DB::table('article')->truncate();
        DB::table('article_collection')->truncate();
        DB::table('collection')->truncate();


        $this->call(Users::class);
        $this->call(MediaTableSeeder::class);
    }
}
