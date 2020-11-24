@extends('layouts.app')

<div class="container mt-5">
            <a class="btn btn-primary" href="{{ url()->previous() }}">« Back</a>
            <h1 class="mt-5">Edit post</h1>
            <form class="mt-5" method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" placeholder="Title" name="title" class="form-control" value="{{ $post->title }}">
                    @error('title')
                        <small class="form-text text-muted error-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" id="content" name="body" placeholder="Content goes here..." rows="5">{{ $post->body }}</textarea>
                    @error('body')
                        <small class="form-text text-muted error-warning">{{ $message }}</small>
                    @enderror
                </div>
                <input class="btn btn-primary" type="submit">
            </form>
        </div>
    </body>
</html>
