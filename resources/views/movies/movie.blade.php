@extends('layouts.app')




@section('content')

<div class="container mt-5">
<h1 class="text-center mb-5">{{strtoupper($movie->title)}}</h1>
    <div class="d-flex"><p class="font-weight-bold">TITLE: &nbsp; </p> {{$movie->title}}</div>
    <div class="d-flex"><p class="font-weight-bold">GENRE: &nbsp;</p> {{$movie->genre}}</div>
    <div class="d-flex"><p class="font-weight-bold">DIRECTOR: &nbsp;</p> {{$movie->director}}</div>
    <div class="d-flex"><p class="font-weight-bold">STORYLINE: &nbsp;</p> {{$movie->storyline}}</div>
    <div class="d-flex"><p class="font-weight-bold">YEAR OF MAKING: &nbsp;</p> {{$movie->year_of_making}}</div>


</div>

@endsection
