@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<h1>Lista de Películas</h1>
<a href="{{ url('/movies/create') }}" class="btn btn-primary mb-3">Agregar Película</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Título</th>
            <th>Año</th>
            <th>Estudio</th>
            <th>Género</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->studio }}</td>
                <td>{{ $movie->category->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
