<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsDislikeController extends Controller
{
	public function store (Tweet $tweet)
	{
		$tweet->toggleDislike(current_user());
		
		return back();
	}
	
}
