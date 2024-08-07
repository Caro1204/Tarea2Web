@extends('layouts.app')

@section('title', 'Peliculas por género')

@section('content')
    <div class="container mt-4">
        <h1>Lista de géneros</h1>
        <div class="list-group">
            <a href="{{ url('movies/genre/Comedy') }}" class="genre-button">Comedias</a>
            <a href="{{ url('movies/genre/Drama') }}" class="genre-button">Drama</a>
            <a href="{{ url('movies/genre/Romance') }}" class="genre-button">Románticas</a>
            <a href="{{ url('movies/genre/Animation') }}" class="genre-button">Animación</a>
            <a href="{{ url('movies/genre/Action') }}" class="genre-button">Acción</a>
        </div>
    </div>
@endsection
