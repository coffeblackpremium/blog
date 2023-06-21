<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request, Post $posts): RedirectResponse
    {
        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
            'slug' => 'required',
        ]);

        $posts->create($validate);

        return redirect()->to(route('dashboard'));
    }

    public function create(): Response
    {
        return Inertia::render('Post/Create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
