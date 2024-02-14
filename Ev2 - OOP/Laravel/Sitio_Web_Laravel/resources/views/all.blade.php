@extends("master")

@section("head")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("nav", "")

@section("section")

@section("main")

@section("content")
    <a href="{{ route('movie.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($movieList as $movie)
        <tr>
            <td>{{$movie->name}}</td>
            <td>{{$movie->description}}</td>
            <td>{{$movie->price}}</td>
            <td>{{$movie->stock}}</td>
            <td>{{$movie->supplier_id}}</td>
            <td>
                <a href="{{route('movie.edit', $movie->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection