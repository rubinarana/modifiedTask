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
   		return view('profile');
   }
    public function index()
   {
   		return view('home');
   }
}
