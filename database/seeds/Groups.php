<?php

use Illuminate\Database\Seeder;

class Groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Groups::class, 10)->create();
    }
}
