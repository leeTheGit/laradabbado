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
        DB::table('groups')->truncate();
        DB::table('user_groups')->truncate();


        $this->call(Users::class);
    }
}
