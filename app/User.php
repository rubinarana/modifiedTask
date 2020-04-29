<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function followers()
    {
        return $this->hasMany(Follower::class,'user_id');
    }
     public function following()
    {
        return $this->hasMany(Follower::class,'follower_id');
    }
     public function posts()
    {
        return $this->hasMany(Post::class);
    }
       public function reactions(){
      return $this->hasMany(Reaction::class);
    }  
      public function follows(User $user)
    {
        return Follower::where('user_id', $user->id)->where('follower_id', auth()->user()->id)->first() ? true : false; 
    }
}
