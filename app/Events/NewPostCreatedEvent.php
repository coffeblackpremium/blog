<?php

namespace App\Events;

use App\Models\Post;
use Illuminate\Foundation\Events\Dispatchable;

class NewPostCreatedEvent
{
    use Dispatchable;

    public function __construct(public Post $post){}
}
