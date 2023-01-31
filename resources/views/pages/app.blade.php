@extends('layouts.main-layout')

@section('name-film')
    <h1>name films</h1>
    @foreach ($movies as $movie)
        {{$movie-> title}}
    @endforeach
@endsection