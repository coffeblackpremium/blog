<?php

namespace App\Listeners;

use App\Events\NewPostCreatedEvent;
use Illuminate\Support\Str;

class GenerateSlugListener
{
    public function __construct()
    {
    }

    public function handle(NewPostCreatedEvent $event): void
    {
        $event->post->slug = Str::slug($event->post->title, '-');

        $event->post->save();
    }
}
