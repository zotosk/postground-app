<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'avatar', 'background', 'email', 'description', 'password',
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

    public function getAvatarAttribute($value)
    {
        $asset = $value ? 'storage/' . $value : '/img/default-avatar.png';
        return asset($asset);
    }

    public function getBackgroundAttribute($value)
    {
        $asset = $value ? 'storage/' . $value : '/img/default-background.jpg';
        return asset($asset);
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->paginate(10);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)
            ->latest();
    }


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    //Followable trait installed on the top including the bellow functions

    // public function follow(User $user)
    // {
    //     return $this->follows()->save($user);
    // }

    // public function follows()
    // {
    //     return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    // }

    // public function following()
    // {
    // }


    //Get names in the url wildcard, in laravel 5, for laravel 7 Methd we user {user:name} - check web routes
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function path($append = '')
    {
        $path =  route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
