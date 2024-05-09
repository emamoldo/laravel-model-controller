@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies:</h1>

    @forelse($movies as $movie)
        <h4>{{$movie->title}}</h4>
        <p>{{$movie->nationality}}</p>
    @empty
        <h1>No Movies Here</h1>
    @endforelse
</div>


@endsection