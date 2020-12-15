@extends('layouts.app')

@section('title', 'movies')


@section('content')
    <div class="container">
        <h1 class="text-center">Movies</h1>
        @foreach($movies as $movie)
            <div class="form-control-item"><a href="{{route('movies.movie', ['movie' => $movie])}}">{{$movie->title}}</a></div>
        @endforeach
    </div>

@endsection
