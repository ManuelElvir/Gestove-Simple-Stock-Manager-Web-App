<?php
namespace App\Repositories;

use App\Tag;
use Illuminate\Support\Str;

class TagRepository
{

    protected $tag;

    public function __construct(Tag $tag)
	{
		$this->tag = $tag;
	}

	public function store($post, $tags)
	{
		$tags = explode(',', $tags);

		foreach ($tags as $tag) {

			$tag = trim($tag);

			$tag_url = Str::slug($tag);

			$tag_ref = $this->tag->where('tag_url', $tag_url)->first();

			if(is_null($tag_ref)) 
			{
				$tag_ref = new $this->tag([
					'tag' => $tag,
					'tag_url' => $tag_url
				]);	

				$post->tags()->save($tag_ref);

			} else {
			
				$post->tags()->attach($tag_ref->id);

			}

		}

	}

}