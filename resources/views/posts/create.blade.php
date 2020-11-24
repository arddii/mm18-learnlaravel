@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-primary" href="{{ url()->previous() }}">« Back</a>
        <h1 class="mt-5">Create new post</h1>
        <form class="mt-5" method="POST" action="/posts" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title"><b>Title:</b></label>
                <input type="text" id="title" placeholder="Title" name="title" class="form-control">
                @error('title')
                    <small class="form-text text-muted error-warning">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content"><b>Content:</b></label>
                <textarea class="form-control" id="content" name="body" placeholder="Content goes here..." rows="5"></textarea>
                @error('body')
                    <small class="form-text text-muted error-warning">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="image"><b>Image:</b></label>
                <input type="file" multiple class="form-control-file" id="image" name="image[]" accept="image/*">
                @error('image')
                    <small class="form-text text-muted error-warning">{{ $message }}</small>
                @enderror
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
@endsection