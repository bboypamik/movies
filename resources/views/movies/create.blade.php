@extends('layouts.app')


@section('title', 'Add Movie')


@section('content')
<div class="container w-50">
    <form method="POST" action="{{route('movies.create')}}" class="mt-5">

        @csrf
        <div class="form-group mt-2">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title">
        </div>
        @include('partials.error-message', ['field' => 'title'])
        <div class="form-group mt-2">
            <label for="genre">Genre</label>
            <label for="genre">Choose Genre:</label>
            <select id="genre" name="genre">
                <option value="action">action</option>
                <option value="comedy">Comedy</option>
                <option value="hrama">Drama</option>
                <option value="horror">Horror</option>
            </select>
        </div>
        @include('partials.error-message', ['field' => 'genre'])
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" placeholder="director" name="director">
        </div>
        @include('partials.error-message', ['field' => 'director'])
        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea type="text" class="form-control @error('storyline') is-invalid @enderror" id="storyline" placeholder="storyline" name="storyline"></textarea>
        </div>
        @include('partials.error-message', ['field' => 'storyline'])
        <div class="form-group">
            <label for="year_of_making">Year Of Making</label>
            <input type="text" class="form-control @error('year_of_making') is-invalid @enderror" id="year_of_making" placeholder="year_of_making" name="year_of_making">
        </div>
        @include('partials.error-message', ['field' => 'year_of_making'])
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
