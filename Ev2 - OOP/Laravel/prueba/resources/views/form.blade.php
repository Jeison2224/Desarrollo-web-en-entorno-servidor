<!--Observa cÃģmo se genera una cabecera de formulario distinta segÃšn se vaya a usar el formulario para crear o para modificar un producto. AsÃ­mismo, fÃ­jate en cÃģmo se rellenan los atributos value de los campos del formulario con los datos actuales del producto (en caso de que existan).-->

@extends("master")

@section("title", "InserciÃģn de productos")

@section("header", "InserciÃģn de productos")

@section("content")
    @isset($product)
        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('product.store') }}" method="POST">
    @endisset
        @csrf
        Nombre del producto:<input type="text" name="name" value="{{$product->name ?? '' }}"><br>
        DescripciÃģn:<input type="text" name="description" value="{{$product->description ?? '' }}"><br>
        Precio:<input type="text" name="price" value="{{$product->price ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection