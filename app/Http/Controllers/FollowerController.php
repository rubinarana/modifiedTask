<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;

class FollowerController extends Controller
{
    public function follow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $followers = Follower::firstOrCreate([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ]);
        return back();
    }
      public function unfollow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $followers = Follower::where([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ])->first();

        if($followers)
            $followers->delete();
        
        return back();
        
    }
}
