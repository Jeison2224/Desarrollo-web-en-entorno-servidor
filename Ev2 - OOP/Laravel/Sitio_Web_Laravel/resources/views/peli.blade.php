<!--Observa cÃģmo se genera una cabecera de formulario distinta segÃšn se vaya a usar el formulario para crear o para modificar un producto. AsÃ­mismo, fÃ­jate en cÃģmo se rellenan los atributos value de los campos del formulario con los datos actuales del producto (en caso de que existan).-->

@extends("master")

@section("title", "Pelicula")

@section("header", "Peliculas")

@section("content")
    <a href="{{ route('movie.list') }}"><h1>PELICULAS ONLINE</h1></a><br>
    <a href="{{ route('ultimas-novedades') }}"><button>Últimas novedades</button></a> 
    <a href="{{ route('proximos-estrenos') }}"><button>Próximos estrenos</button></a><br><br><br><br><br><br>

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

        <label class="titu" for="titulo">Genero:</label><br>
        <div class="button-container">
            @foreach ($genres as $genre)
                <a href="{{ route('peliculasporgenero', ['genre' => $genre->id]) }}" class="genre-link">
                    <input class="buttonG" type="button" value="{{ $genre->genre }}">
                </a>
                @if ($loop->iteration % 3 == 0)
                    <br>
                @endif
            @endforeach
        </div>
@endsection

@section('contenido')
<<<<<<< HEAD
    <div class="link-container">
        <img src="{{ asset('images/'.$movie->image) }}" alt="" width="30%">
        <h4>Nombre:</h4> <span>{{ $movie->title }}</span>
        <h4>Genero:</h4> <span>{{$genre->name}}</span>
        <h4>Director:</h4> <span>{{$movie->LeadActors}}</span>
        <h4>Duración:</h4> <span>{{$movie->duration}}</span>
=======
    <div class="peli">
        <h1>{{ $movie->title }}</h1>
        <img src="{{ asset('images/'.$movie->image) }}" alt="" width="30%" class="imagen">
        <div class="datosPeli">
            <p class="lado"><strong>Director:</strong> {{ $movie->Director->name }}</p><br>
            <p class="lado"><strong>Actor:</strong> {{ $movie->LeadActor->name }}</p><br>
            <p class="lado"><strong>Guionistas:</strong>
            @foreach ($movie->writers as $writer)
                {{ $writer->name }}</p><br>
            @endforeach
            <p class="lado"><strong>Fecha de estreno:</strong> {{ $movie->release_date }}</p><br>
            <p class="lado"><strong>Duración:</strong>{{ $movie->duration }}</p><br>
            <p class="lado"><strong>Genero:</strong> {{ $movie->Genre->genre }}</p><br>
        </div>
        <p class="sino"><strong>Sinopsis:</strong> {{ $movie->synopsis }}</p><br>
>>>>>>> cac98798a9166c47194890a066cd3074fc4e3215
    </div>
@endsection
