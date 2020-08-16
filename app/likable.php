<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait likable
{
	public function likes()
	{
		return $this->hasMany(Like::class);
	}
	
	public function scopeWithLikes(Builder $query)
	{
		$query->leftJoinSub(
			'select tweet_id, sum(liked) likes, sum(disliked) dislikes from likes group by tweet_id',
			'likes',
			'likes.tweet_id',
			'tweets.id'
		);
	}
	
	public function isDislikedBy(User $user)
	{
		return (bool) $user->likes
			->where('tweet_id', $this->id)
			->where('disliked', true)
			->count();
	}
	
	public function isLikedBy(User $user)
	{
		return (bool) $user->likes
			->where('tweet_id', $this->id)
			->where('liked', true)
			->count();
	}
	
	public function like($user = null, $liked = true)
	{
		like::updateOrCreate([
			'user_id' => $user ? $user->id : auth()->id(),
			'tweet_id' => $this->id],
			['liked' => $liked,
			'disliked' => null
		]);
	}
	
	public function dislike($user = null, $disliked = true)
	{
		like::updateOrCreate([
			'user_id' => $user ? $user->id : auth()->id(),
			'tweet_id' => $this->id],
			['liked' => null,
			'disliked' => $disliked
		]);
	}
	
	public function unlike(User $user)
	{
		return $this->likes()->delete($user);
	}
	
	public function toggleLike(User $user)
	{
		if ($this->isLikedBy($user) ? $this->unlike($user) : $this->like($user));
	}
	
	public function unDislike(User $user)
	{
		return $this->likes()->delete($user);
	}
	
	public function toggleDislike(User $user)
	{
		if ($this->isDislikedBy($user) ? $this->unDislike($user) : $this->Dislike($user));
	}
}