@extends('layouts.app')




@section('content')

<div class="container mt-5">
<h1 class="text-center mb-5">{{strtoupper($movie->title)}}</h1>
    <div class="d-flex"><p class="font-weight-bold">TITLE: &nbsp; </p> {{$movie->title}}</div>
    <div class="d-flex"><p class="font-weight-bold">GENRE: &nbsp;</p> {{$movie->genre}}</div>
    <div class="d-flex"><p class="font-weight-bold">DIRECTOR: &nbsp;</p> {{$movie->director}}</div>
    <div class="d-flex"><p class="font-weight-bold">STORYLINE: &nbsp;</p> {{$movie->storyline}}</div>
    <div class="d-flex"><p class="font-weight-bold">YEAR OF MAKING: &nbsp;</p> {{$movie->year_of_making}}</div>

    <h3 class="mt-3">Comments</h3>

    <form class="mt-5" method="POST" action="{{route('comments.store', ['movie' =>$movie])}}">
        @csrf
        <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="content" name="content">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>

        </div>

    </form>

    @foreach($movie->comments as $comment)
        <p class="mt-3">{{$comment->content}}</p>
    @endforeach
    @include('partials.error-message', ['field' => 'content'])

</div>

@endsection
