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
    </div>
@endsection