@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $index => $movie)
                <div class="col-3 pb-4">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">{{$movie->title}}</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Original title: {{$movie->original_title}}</li>
                                <li class="list-group-item">Nationality: {{$movie->nationality}}</li>
                                <li class="list-group-item">Date: {{$movie->date}}</li>
                                <li class="list-group-item">Vote: {{$movie->vote}}</li>
                            </ul>
                            <a href="#" class="btn btn-primary">GO TO THE FILM</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
