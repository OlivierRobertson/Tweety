<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
	use likable;
	
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function likes()
	{
		return $this->hasMany(like::class);
	}
}
