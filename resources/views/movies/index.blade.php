@extends('layouts.master')

@section('content')
    <div class="container">
        @if ($movies)
        <h1>Movies index</h1>
            <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="/movies/{{ $movie->id }}"><h4>{{ $movie->title}}</h4></a>
                    <p>{{ $movie->storyline}}</p>
                </li>
            @endforeach
            </ul>
        @endif
    </div>
@endsection