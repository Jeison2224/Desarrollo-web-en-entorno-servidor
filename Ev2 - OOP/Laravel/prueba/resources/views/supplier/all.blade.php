@extends("master")

@section("head")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("nav", "")

@section("section")

@section("main")

@section("content")
    <a href="{{ route('supplier.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($supplierList as $supplier)
        <tr>
            <td>{{$supplier->name}}</td>
            <td>{{$supplier->addres}}</td>
            <td>{{$supplier->city}}</td>
            <td>{{$supplier->country}}</td>
            <td>{{$supplier->contact_id}}</td>
            <td>
                <a href="{{route('product.edit', $supplier->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('product.destroy', $supplier->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection