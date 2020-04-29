<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcontroller extends Controller
{
   public function create()
   {
   		return view('create');
   }
   public function profile()
   {
   		$user = auth()->user();
         return view('profile')->with('user',$user);
   }
    public function index()
   {
         $user = auth()->user();
         // dd($user);
   		return view('home')->with('user',$user);
   }
   public function termcondition()
   {
      return view('termcondition');
   }
     public function help()
   {
      return view('help');
   }
     public function customercare()
   {
      return view('customercare');
   }
      public function services()
   {
      return view('services');
   }
      public function privacypolicy()
   {
      return view('privacypolicy');
   }
   public function follower()
   {
      $user = auth()->user();
      return view('follower')->with('user',$user);
   }
}
