@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{ $posts->links() }}
        <div class="row row-cols-3">
            @foreach($posts as $post)
                <div class="col mt-5">
                    <div class="card" style="width: 20rem;">
                        @if($post->images->count())
                            <img class="card-img-top" src="{{ $post->images[0]->path }}" alt="">
                        @endif
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title  }}</h3>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <footer class="blockquote-footer">{{ $post->user->name }}</footer>
                            <a class="card-link" href="/{{ $post->id }}">Read More »</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
