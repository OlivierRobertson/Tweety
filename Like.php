<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
	protected $guarded = [];
	
	public function tweets()
	{
		return $this->belongsToMany(Tweet::class);
	}
	
	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}