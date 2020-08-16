<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable, likable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
		if(isset($value)) {
			return asset('storage/' . $value );
		} else {
			return asset('images/defaultpf.png');
		}
	}
	
	public function getBackgroundPictureAttribute($value)
	{
		if(isset($value)) {
			return asset('storage/' . $value );
		} else {
			return asset('images/background_picture.jpg');
		}
	}

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] =bcrypt($value);
	}

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
			->withLikes()
            ->latest()
			->paginate(50);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }
    
    public function likes()
	{
		return $this->hasMany(like::class);
	}
    
    public function path($append = '')
	{
		$path = route('profile', $this->username);
		
		return $append ? "{$path}/{$append}" : $path;
	}
}