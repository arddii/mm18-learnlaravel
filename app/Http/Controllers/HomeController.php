<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller {
    public function index() {
        $posts = Post::latest()->paginate();
        return view('home', compact('posts'));
    }

    public function post(Post $post) {
        return view('post', compact('post'));
    }
}
