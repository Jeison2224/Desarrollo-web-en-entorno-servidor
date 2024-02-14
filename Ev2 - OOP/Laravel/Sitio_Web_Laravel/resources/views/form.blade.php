<!--Observa cÃģmo se genera una cabecera de formulario distinta segÃšn se vaya a usar el formulario para crear o para modificar un producto. AsÃ­mismo, fÃ­jate en cÃģmo se rellenan los atributos value de los campos del formulario con los datos actuales del producto (en caso de que existan).-->

@extends("master")

@section("title", "Pelicula")

@section("header", "Peliculas")

@section("content")
    @isset($movie)
        <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('movie.store') }}" method="POST">
    @endisset
        @csrf
        Titulo:<input type="text" name="name" value=""><br>
        Director:<input type="text" name="description" value=""><br>
        Genero:<input type="text" name="price" value="{{$movie->genre ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection