@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies:</h1>

    <div class="container text-center">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @forelse($movies as $movie)
                <div class="col">
                    <div class="card py-4 my-4">
                        <div class="cards card-body">
                            <div class="col">
                                <strong>Title:
                                    <h6>{{$movie->title}}</h6>
                                </strong>

                                <strong> Original Title:
                                    <h5>{{$movie->original_title}}</h5>
                                </strong>

                                <strong> Nationality:
                                    <p>{{$movie->nationality}}</p>
                                </strong>

                                <strong> Date of Release:
                                    <p>{{$movie->date}}</p>
                                </strong>

                                <strong> Vote:
                                    <p>{{$movie->vote}}</p>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No Movies Here</h1>
            @endforelse
        </div>
    </div>

    @endsection