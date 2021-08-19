
<!doctype html>

<title>Blog</title>
@extends('welcome')

@section('content')
    <x-searchbar />
    <body>
    <h1 class="mx-6">Blog Posts</h1>
    <?php foreach ($posts as $post) :?>
    <article class="my-3 mx-6">
        <p>=========================================================================</p>
        <h3>Post Name:</h3>
        <h2><a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a></h2>
        <div>
            {!! $post->sentence !!}
        </div>
        <p>
            Author:
            <a href="/user/{{ $post->author }}">{{ DB::table('users')->where('id', $post->author)->value('name') }}</a>
        </p>

    </article>
    <?php endforeach; ?>
    <p class="mx-6">=========================================================================</p>
    @if($posts->count() == 0)
        <h3>There are no posts.</h3>
    @else
        {{ $posts->links() }}
    @endif
    </body>
@endsection







