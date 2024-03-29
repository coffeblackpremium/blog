<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    /**
     * Save new Post.
     *
     * @param Request $request
     * @param Post $posts
     * @return RedirectResponse
     */
    public function store(Request $request, Post $posts): RedirectResponse
    {
        $this->authorize('create', Post::class);

        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'subtitle' => 'required'
        ]);

        $posts->create([
            ...$validate,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->to(route('dashboard'));
    }

    /**
     * Create new post.
     *
     * @return Response
     */
    public function create(): Response
    {
        $this->authorize('create', Post::class);
        return Inertia::render('Post/Create');
    }

    /**
     * Show page post.
     *
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        $post = Post::with('user')->where('slug', $slug)->first();

        $readingPace = (count(explode(' ',$post->body)) * 60 / 200 ) / 60 ;
        $readingPace = round($readingPace, 0);

        return Inertia::render('Post/Show', [
            'post' => $post,
            'readingPace' => $readingPace
        ]);
    }
}
