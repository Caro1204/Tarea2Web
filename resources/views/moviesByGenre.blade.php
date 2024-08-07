@extends('layouts.app')

@section('title', 'Movies by Genre')

@section('content')
<h1>Lista por género: {{ $genre }}</h1>
<a href="{{ url('/') }}" class="btn btn-secondary mb-3">Volver</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Título</th>
            <th>Año</th>
            <th>Estudio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->studio }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
