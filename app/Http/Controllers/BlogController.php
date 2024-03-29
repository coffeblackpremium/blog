<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class BlogController extends Controller
{
    public function index(): Response
    {
        $posts = Post::with('user')
            ->orderByDesc('created_at')
            ->paginate(30);

        return Inertia::render('Blog/Index', [
            'posts' => $posts
        ]);
    }
}
