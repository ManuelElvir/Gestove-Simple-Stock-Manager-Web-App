<?php namespace App\Repositories;

use App\Post;

class PostRepository {

    protected $post;

    public function __construct(Post $post)
	{
		$this->post = $post;
	}

	private function queryWithUserAndTags()
	{
		return $this->post->with('user', 'tags')
		->latest('posts.created_at');		
	}

	public function getWithUserAndTagsPaginate($n)
	{
		return $this->queryWithUserAndTags()->paginate($n);
	}

	public function getWithUserAndTagsForTagPaginate($tag, $n)
	{
		return $this->queryWithUserAndTags()
		->whereHas('tags', function($q) use ($tag)
		{
		  $q->where('tags.tag_url', $tag);
		})->paginate($n);
	}

	public function store($inputs)
	{
		return $this->post->create($inputs);
	}

	public function destroy($id)
	{
		$post = $this->post->findOrFail($id);
		$post->tags()->detach();
		$post->delete();
	}

}