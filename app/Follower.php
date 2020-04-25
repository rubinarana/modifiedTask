<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follower extends Model
{
   public function users()
   {
   		return $this->belongsTo(User::class);
   }
}
