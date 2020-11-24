
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>All available posts
            <small>{{ $posts->total() }}</small>
            <a class="btn btn-primary" href="/posts/create" style="float: right;">Create new Post</a>
        </h1>
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('posts.show', ['post' => $post->id]) }}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
                        <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection