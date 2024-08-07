<?php
// app/Http/Controllers/MovieController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Listar colección con ordenamiento opcional
    public function index(Request $request)
    {
        $sortBy = $request->query('sort_by', 'id'); // Campo por el cual ordenar
        $order = $request->query('order', 'asc');    // Orden (ascendente o descendente)

        $movies = Movie::orderBy($sortBy, $order)->with('category')->get();

        return response()->json($movies, 200);
    }

    // Obtener entidad por ID
    public function show($id)
    {
        $movie = Movie::with('category')->find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        return response()->json($movie, 200);
    }

    // Agregar nueva entidad
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer',
            'studio' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $movie = Movie::create($request->all());

        return response()->json($movie, 201);
    }

    // Modificar entidad existente
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
            'studio' => 'sometimes|required|string|max:255',
            'category_id' => 'sometimes|required|exists:categories,id',
        ]);

        $movie->update($request->all());

        return response()->json($movie, 200);
    }

    // Mostrar películas por género (opcional si se desea como endpoint API)
    public function showMoviesByGenre($genre)
    {
        $category = Category::where('name', $genre)->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $movies = Movie::where('category_id', $category->id)->get();

        return response()->json($movies, 200);
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        // Obtener todas las categorías para mostrarlas en el formulario
        $categories = Category::all();

        // Retornar la vista con el formulario para crear una nueva película
        return view('movies.create', compact('categories'));
    }
}
