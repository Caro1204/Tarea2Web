@extends('layouts.app')

@section('title', 'Agregar Película')

@section('content')
<h1>Agregar Película</h1>
<form action="{{ url('movies') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Año</label>
        <input type="text" name="year" id="year" class="form-control">
    </div>
    <div class="mb-3">
        <label for="studio" class="form-label">Estudio</label>
        <input type="text" name="studio" id="studio" class="form-control">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Género</label>
        <select name="category_id" id="category_id" class="form-select">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Agregar</button>
</form>
@endsection
