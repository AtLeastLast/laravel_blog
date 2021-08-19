{{--<!doctype html>--}}

{{--<title>Blog</title>--}}
    <!DOCTYPE html>
<html>
@extends('welcome')
@section('content')
<head>
    <title>All posts by {{ $name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<x-searchbar />

<h2 class="mx-6">These are all of {{ $name }}s posts.</h2>

@foreach ($posts as $post)
    <article class="my-3 mx-6">
        <p>=========================================================================</p>
        Post Name:
        <h1><a href="/posts/{{ $post->slug }}">
            {{ $post->title }}
            </a></h1>
        <div>
        {!! $post->sentence !!}
        </div>
    </article>
@endforeach
<p class="mx-6">=========================================================================</p>

{{ $posts->links() }}
</body>
@endsection
</html>
