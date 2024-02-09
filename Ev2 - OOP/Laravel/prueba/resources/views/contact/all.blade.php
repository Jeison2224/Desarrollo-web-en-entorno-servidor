@extends("master")

@section("head")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("nav", "")

@section("section")

@section("main")

@section("content")
    <a href="{{ route('contact.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($contactList as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->surname}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone_number}}</td>
            <td>{{$contact->supplier_id}}</td>
            <td>
                <a href="{{route('contact.edit', $contact->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('contact.destroy', $contact->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection