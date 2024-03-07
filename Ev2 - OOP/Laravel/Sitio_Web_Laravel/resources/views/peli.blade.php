<!--Observa cÃģmo se genera una cabecera de formulario distinta segÃšn se vaya a usar el formulario para crear o para modificar un producto. AsÃ­mismo, fÃ­jate en cÃģmo se rellenan los atributos value de los campos del formulario con los datos actuales del producto (en caso de que existan).-->

@extends("master")

@section("title", "Pelicula")

@section("header", "Peliculas")

@section("content")
    <h1>PELICULAS ONLINE</h1><br>
    <button>Ultimas novedades</button> <button>Próximos estrenos</button><br><br><br>
    @isset($movie)
        <form action="" method="POST">
        @method("PUT")
    @else
    @endisset
        @csrf
        <label class="titu" for="titulo">Titulo:</label><br>
        <input class="titu" type="text" name="name" value=""><br><br>

        <label class="titu" for="director">Director:</label><br>
        <input class="titu" type="text" name="director" value=""><br><br>

        Genero: <br>
        <div class="button-container">
            @foreach ($genres as $lista)
                <input class="button" type="button" value={{$lista->genre}}>
                @if ($loop->iteration % 3 == 0)
                    <br>
                @endif
            @endforeach
        </div>
@endsection

@section('contenido')
    <div class="link-container">
        <img src="{{ asset('images/'.$movie->image) }}" alt="" width="30%">
        <h4>Nombre:</h4> <span>{{ $movie->title }}</span>
        <h4>Genero:</h4> <span>{{$genre->name}}</span>
        <h4>Director:</h4> <span>{{$movie->LeadActors}}</span>
        <h4>Duración:</h4> <span>{{$movie->duration}}</span>
    </div>
@endsection