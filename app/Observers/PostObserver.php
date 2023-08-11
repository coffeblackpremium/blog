<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{

    /**
     * Create slug for new post.
     *
     * @param Post $post
     * @return void
     */
    public function creating(Post $post): void
    {
        $post->slug = Str::slug($post->title);
    }
}
