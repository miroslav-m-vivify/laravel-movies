@extends('layouts.master')

@section('content')
    <div class="container">
        @if ($movie)
        <h1>{{ $movie->title}}</h1>
        <p>Year: {{ $movie->year }}</p>
        <p>Genre: {{ $movie->genre }}</p>
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
    </div>
@endsection