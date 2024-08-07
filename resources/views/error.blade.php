@extends('layouts.app')

@section('title', 'Error')

@section('content')
<h2>Error! {{ $message }}</h2>
<a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
@endsection
