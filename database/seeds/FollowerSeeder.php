<?php

use Illuminate\Database\Seeder;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        \App\Follower::create([
        	'user_id' =>1,
        	'follower_id' =>2
        ]);
        \App\Follower::create([
        	'user_id' =>1,
        	'follower_id' =>3
        ]);
        \App\Follower::create([
        	'user_id' =>1,
        	'follower_id' =>4
        ]);
        \App\Follower::create([
        	'user_id' =>1,
        	'follower_id' =>5
        ]);
        \App\Follower::create([
        	'user_id' =>2,
        	'follower_id' =>2
        ]);
        \App\Follower::create([
        	'user_id' =>3,
        	'follower_id' =>2
        ]);
    }
}
