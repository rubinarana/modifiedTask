<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;

class FollowerController extends Controller
{
    public function follow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $follower = Follower::firstOrCreate([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ]);

        return back();
    }

    public function unfollow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $follower = Follower::where([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ])->first();

        if($follower)
            $follower->delete();        
        return back();   
    }
}
