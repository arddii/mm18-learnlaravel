<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePostRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
    public function index() {
        $posts = Auth::user()->posts()->orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view ('posts.create');
    }

    public function store(CreatePostRequest $request) {
        $post = new Post($request->validated());
        $post->user()->associate(Auth::user());
        $post->save();

        foreach(request()->file('image') as $file) {
            $filename = $file->store('public', ['disk' => 'public']);

            $image = new Image();
            $image->path = Storage::disk('public')->url($filename);
            $image->post()->associate($post);
            $image->save();
        }

        return redirect('/posts');
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(CreatePostRequest $request, Post $post) {
        $post->fill($request->validated());
        $post->save();

        return redirect('/posts');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/posts');
    }
}
