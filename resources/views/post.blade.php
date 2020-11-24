@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-primary" href="{{ url()->previous() }}">« Back</a>
        <div class="card mt-5 w-25">
            @if($post->images->count())
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($post->images as $key => $image)
                            <div class="carousel-item @if($key == 0) active @endif()">
                                <img class="d-block w-100" src="{{ $image->path }}">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <p class="card-text">{!! $post->displayBody !!}</p>
                <footer class="blockquote-footer">{{ $post->user->name }}</footer>
                <div class="test"></div>
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <form action="{{ route('comments.store', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Write some comment here..."></textarea>
                    </div>
                    <input class="btn btn-sm btn-primary" type="submit" value="Add Comment">
                </form>
            </li>
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->body }}
                    <footer class="blockquote-footer">{{ $comment->user->name }}</footer>
                </li>
            @endforeach
        </ul>
    </div>
@endsection