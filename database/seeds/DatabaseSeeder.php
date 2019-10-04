<?php

use Illuminate\Database\Seeder;
use Lib\l;

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
        DB::table('articles')->truncate();
        DB::table('article_collection')->truncate();
        DB::table('collection')->truncate();


        $data = $this->call(Users::class);
        $this->call(MediaTableSeeder::class, $data['users']);
        $this->call(ArticleTableSeeder::class, $data['users']);

    }

    public function call($class, $extra = null) {
        $res = $this->resolve($class)->run($extra);

        if (isset($this->command)) {
            $this->command->getOutput()->writeln("<info>Seeded:</info> $class");
        }

        return $res;
    }


}
