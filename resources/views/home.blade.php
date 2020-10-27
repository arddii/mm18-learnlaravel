<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            {{ $posts->links() }}
            <div class="row row-cols-3">
                @foreach($posts as $post)
                    <div class="col mt-5">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->title  }}</h3>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a class="card-link" href="/{{ $post->id }}">Read More »</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
