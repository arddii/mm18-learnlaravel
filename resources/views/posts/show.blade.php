<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $post->title }}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <a class="btn btn-primary" href="{{ url()->previous() }}">« Back</a>
            <table class="table table-striped mt-5">
                <tbody>
                    <tr>
                        <td><b>ID</b></td>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                        <td><b>Author</b></td>
                        <td>{{ $post->user->name }}</td>
                    </tr>
                    <tr>
                        <td><b>Title</b></td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <td><b>Content</b></td>
                        <td>{{ $post->body }}</td>
                    </tr>
                    <tr>
                        <td><b>Created</b></td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                    <tr>
                        <td><b>Modified</b></td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
