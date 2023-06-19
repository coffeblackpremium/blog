<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    final public function index()
    {
        //
    }

    final public function create(): Response
    {
        return Inertia::render('Post/Create');
    }

    public function store(Request $request)
    {
        //
    }

    final public function show($id)
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
