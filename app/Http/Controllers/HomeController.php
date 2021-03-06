<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $user = \App\User::paginate(15);
        return view('follower')->withUser($user);
    }
    //  public function following()
    // {
    //     $user = \App\User::paginate(15);
    //     return view('following')->withUser($user);
    // }
}