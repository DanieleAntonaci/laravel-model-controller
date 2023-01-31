@extends('layouts.main-layout')

@section('name-film')
    <h1>FILMS</h1>
    <table>
        <thead>
            <tr>

                <th>
                    title
                </th>
                <th>
                    original_title
                </th>
                <th>
                    nationality
                </th>
                <th>
                    date
                </th>
                <th>
                    vote
                </th>

            </tr>   
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>
                        {{$movie-> title}}
                    </td>
                    <td>         
                        {{$movie-> original_title}}
                    </td>
                    <td>     
                        {{$movie-> nationality}}
                    </td>
                    <td>
                        {{$movie-> date}}
                    </td>
                    <td>
                        {{$movie-> vote}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection