<!--Observa cÃģmo se genera una cabecera de formulario distinta segÃšn se vaya a usar el formulario para crear o para modificar un producto. AsÃ­mismo, fÃ­jate en cÃģmo se rellenan los atributos value de los campos del formulario con los datos actuales del producto (en caso de que existan).-->

@extends("master")

@section("title", "Pelicula")

@section("header", "Peliculas")

@section("content")
    <h1>PELICULAS ONLINE</h1><br>
    <button>Ultimas novedades</button> <button>Próximos estrenos</button><br><br><br>
    @isset($movie)
        <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="POST">
        @method("PUT")
    @else
    @endisset
        @csrf
        <label class="titu" for="titulo">Titulo:</label><br>
        <input class="titu" type="text" name="name" value=""><br><br>

        <label class="titu" for="director">Director:</label><br>
        <input class="titu" type="text" name="director" value=""><br><br>

        Genero: <br>
       {{-- @foreach ($genres as $lista)
            <input class="button" type="button" value={{$lista->genre}}>
        @endforeach --}}
        <div class="button-container">
            @foreach ($genres as $lista)
                <input class="button" type="button" value={{ $lista->genre }}>
                @if ($loop->iteration % 3 == 0)
                    <br>
                @endif
            @endforeach
        </div>
@endsection

@section('contenido')
    <h1>CATALOGO DE PELICULAS</h1><br><br>
    <div class="link-container">
    @foreach ($movies as $movie)
        <a href="">
            <img src="{{ asset('images/'.$movie->image) }}" alt="" width="30%">
        </a>
        @if ($loop->iteration % 3 == 0)
            <br>
        @endif
    @endforeach

@endsection