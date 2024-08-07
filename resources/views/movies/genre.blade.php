@extends('layouts.app')

@section('title', 'Peliculas por género')

@section('content')
    <div class="container mt-4">
        <h1>Lista de películas por género: {{ $genre }}</h1>
        <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Volver</a>
        @if ($movies->isEmpty())
            <p>No se encontraron películas en este género.</p>
        @else
            <table class="table">
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
        @endif
    </div>
@endsection
