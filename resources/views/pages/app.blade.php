@extends('layouts.main-layout')

@section('name-film')
    <h1>name films</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h2>
                {{$movie-> title}}
            </h2>
            <h3>
                {{$movie-> original_title}}
            </h3>
            <div>
                {{$movie-> nationality}}
            </div>
            <div>
                {{$movie-> date}}
            </div>
            <div>
                {{$movie-> vote}}
            </div>
        </li>
        @endforeach
    </ul>
@endsection