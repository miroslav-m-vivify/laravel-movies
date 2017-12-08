@extends('layouts.master')

@section('content')
    <div class="container">
        @if ($movie)
        <h1>{{ $movie->title}}</h1>
        <p>Year: {{ $movie->year }}</p>
        <p>Genre: <a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></p>
        <p>Director: {{ $movie->director }}</p>
        <p>Storyline: {{ $movie->storyline }}</p>
        <br>
        @endif

        @if(count($movie->comments))
        <div class="container">
          <p><br><strong>Comments:</strong><br></p>
          <ul class="list-unstiled">
            @foreach($movie->comments as $comment)
              <li>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->created_at }}</p>
              </li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="container">
        <form method="POST" action="{{ url('/comments/add/' . $movie->id) }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="content">Comment</label>
                <input type="text" class="form-control" id="content" name="content"/>
                @include(
                    'partials.error-message',
                    ['fieldTitle' => 'content']
                )
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add comment</button>
            </div>
        </form>
      </div>
    </div>
@endsection