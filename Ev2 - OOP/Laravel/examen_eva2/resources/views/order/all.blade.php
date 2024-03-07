@extends("master")

@section("title", "Administración de empleados")

@section("header", "Administración de empleados")

@section("main_title", "Listado de empleados")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th>Producto</th><th>Proveedor</th><th>Empleado de compras</th><th>Cantidad</th><th>Precio</th><th>Comentario</th><th class='sinbordes'></th><th class='sinbordes'></th>
        </tr>
    @foreach ($orderList as $order)
        <tr>
            <td>{{$order->product->name}}</td>
            <td></td>
            <td></td>
            <td>{{$order->amount}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->comments}}</td>
            <td class='sinbordes centrado'>
                <a href="{{route('order.edit', $order->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action = "{{route('order.destroy', $order->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </table><br>
    <a href="{{ route('employee.create') }}">Nuevo empleado</a>
    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection