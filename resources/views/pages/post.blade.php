@extends('base')


@section('content')

<!-- Title -->
<h1 class="mt-4">{{ $post->title }}</h1>
  <!-- Author -->
          <p class="lead">
            by
            <a href="#">Start Bootstrap</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted {{ $post->created_at->diffForHumans() }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->
          {!! $post->body !!}

          <hr>

          <div id="comments"></div>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Comments -->
          @foreach ($comments as $comment)
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="https://www.gravatar.com/avatar/<?php echo md5($comment->user->email); ?>" alt="">
            
            <div class="media-body">
              <h5 class="mt-0">{{ $comment->user->name }}</h5>
              {{ $comment->comment }}
            </div>
          </div>
          @endforeach
@endsection
        