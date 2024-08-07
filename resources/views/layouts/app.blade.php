<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movies')</title>
    <style>
        /* Estilos personalizados */
        body {
        font-family: Arial, sans-serif;
        background-color: #FFEBCD;
        color: #343a40;
        padding: 20px;
        text-align: center;
    }
    nav.navbar {
        background-color: #000000;
        padding: 10px 20px;
    }
    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .navbar-brand {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: bold;
    }
    .navbar-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }
    
    .navbar-nav .nav-item {
        margin-left: 15px;
    }
    
    .navbar-nav .nav-link {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        transition: color 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
        color: #d4edda;
    }
    
    .btn-add-movie {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 20px;
    background-color: #000000; 
    color: #FFFFFF; 
    text-decoration: none;
    border-radius: 5px;
    }

    
    .btn-add-movie:hover {
        background-color: #FFFFFF;
        color: #000000;
    }
    
    .movie-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    .movie-table th, .movie-table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #dee2e6;
        background-color: #FFFFFF;
    }
    
    .movie-table th {
        background-color: #000000;
        color: white;
        margin: 0 auto; /* Centra los elementos */
    }
    
    .movie-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    .movie-table tr:hover {
        background-color: #e9ecef;
    }
    h1 {
        font-size: 2rem;
        color: #007bff;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #495057;
    }
    h1 {
    color: black;
}
    /*stylo de agregar*/
    /*  */
    .form-control, .form-select {
        width: 25%; /* Ajusta el ancho según tus necesidades */
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }
     /* agregar */
    .btn-success {
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        background-color: #000000; /* Cambiar el color del botón a negro */
        color: #FFFFFF; /* Cambiar el color del texto a blanco */
    }
    /*inicio */
    .genre-button {
    display: block;
    width: 10%;
    padding: 15px;
    margin-bottom: 10px;
    text-align: center;
    text-decoration: none;
    color: white;
    background-color: #000000;
    border: 1px solid transparent;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}
.list-group {
    display: flex;
    flex-direction: column; /* Para que los botones se alineen en una columna */
    align-items: center; /* Centrar horizontalmente */
}

.genre-button:hover {
    background-color: #FFFFFF;
    transform: scale(1.05);
        color: #000000;
}
    </style>
</head>
<body>
<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Aplicacion de peliculas</a>
        <div class="navbar-menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies') }}">Películas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movies/create') }}">Añadir película</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
