<?php

use Illuminate\Database\Seeder;
use Lib\l;
use Illuminate\Support\Arr;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        l::og('seeding the seeds');
        $groupIds = [];
        factory(App\Groups::class, 5)->create()->each(function($group) use (&$groupIds) {
            $groupIds[] = $group->id;
        });

        
        factory(App\User::class, 50)->create()->each( function($user)  use ($groupIds) {
            try {
                factory(App\UserGroups::class, 2)->create(['user_id' => $user->id, 'group_id' => Arr::random($groupIds) ]);
            } catch (\Exception $e) {
                l::og($e->getMessage());
            }
        });

    }
}
