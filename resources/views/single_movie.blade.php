@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
    <div class="container">
        <div class="card h-100 mb-4" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{$movie->title}}</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Original title: {{$movie->original_title}}</li>
                    <li class="list-group-item">Nationality: {{$movie->nationality}}</li>
                    <li class="list-group-item">Date: {{$movie->date}}</li>
                    <li class="list-group-item">Vote: {{$movie->vote}}</li>
                </ul>
            </div>
        </div>
        <div class="mb-4">
            <a href="{{ route('home') }}" class="btn btn-primary">GO HOME</a>
        </div>
    </div>
@endsection