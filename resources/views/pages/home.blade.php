@extends('base')

@section('content')
<h1 class="my-4">Jordan's Dev Life
<small>Laravel and React all the way!!!</small>
</h1>

@foreach ($posts as $post)
<!-- Blog Post -->
<div class="card mb-4">
<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
<div class="card-body">
    <h2 class="card-title">{{ $post->title }}</h2>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
    <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More &rarr;</a>
</div>
<div class="card-footer text-muted">
    Posted on January 1, 2017 by
    <a href="/post/{{ $post->slug }}">Start Bootstrap</a>
</div>
</div>
@endforeach

{{ $posts->links() }}
@endsection
