<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsLikeController extends Controller
{
	public function store (Tweet $tweet)
	{
		$tweet->toggleLike(current_user());
		
		return back();
	}
}
