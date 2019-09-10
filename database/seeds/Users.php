<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Lib\l::og('seeding the seeds');

        factory(App\User::class, 50)->create();
    }
}
