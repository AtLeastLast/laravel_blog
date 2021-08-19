<!DOCTYPE html>
@extends('welcome')
@section('content')
<html>
<head>
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <article class="mx-6">
            <h1>
                {{$post->title}}
            </h1>
            <div>
                {!! $post->body !!}
            </div>

            <p>
            Author:
                <a href="/user/{{ $post->author }}">{{ DB::table('users')->where('id', $post->author)->value('name') }}</a>
            </p>
            <a href="/" class="btn btn-outline-primary btn-sm mx-0 my-3">Go Back</a>
        </article>
</body>

</html>
@endsection
