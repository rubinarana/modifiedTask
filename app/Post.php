<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reaction;

class Post extends Model
{
    public function users()
   {
   		return $this->belongsTo(User::class);
   }
    public function reactions()
    {
      return $this->belongsTo(Reaction::class);
    }
    
}
