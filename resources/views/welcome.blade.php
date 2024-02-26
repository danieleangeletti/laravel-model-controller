@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <ul>
            @foreach ($movies as $index => $movie )
                <li>
                    <div>ID: {{$movie->id}}</div>
                    <div>Title: {{$movie->title}}</div>
                    <div>Original title: {{$movie->original_title}}</div>
                    <div>Nationality: {{$movie->nationality}}</div>
                    <div>Date: {{$movie->date}}</div>
                    <div>Vote: {{$movie->vote}}</div>
                    <hr>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
