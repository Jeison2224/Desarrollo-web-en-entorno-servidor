@extends("master")

@section("head")

@section("title", "Movie")

@section("content")
    <table border='1'>
    @foreach ($movieList as $movie)
        <tr>
            <td>{{$movie->title}}</td>
        </tr>
    @endforeach
    </table>
@endsection