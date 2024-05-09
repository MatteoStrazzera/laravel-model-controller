@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies cards</h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ $movie->title }}
                            </h3>
                            <p>
                                {{ $movie->original_title }}
                            </p>
                            <p>
                                {{ $movie->nationality }}
                            </p>
                            <p>
                                {{ $movie->date }}
                            </p>
                            <p>
                                {{ $movie->vote }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
