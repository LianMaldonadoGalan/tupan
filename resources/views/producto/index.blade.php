@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>Productos</h1>
@stop

@section('content')
<p>Lista de productos</p>

<div class="card">

    <div class = "card-header">
        <a class = "btn btn-success btn-lg" href="{{route('producto.create')}}">Agregar Producto</a>
        
    </div>

    <div class="card-body">
        <table class = "table table-striped">
            <thead>
                <tr>
                    <th>IMAGEN</th>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($producto as $product)
                    <tr>
                        <td width = "5px">
                            <img src = "{{asset('images/'.$product->imgpath) }}" alt="{{$product->nombre}}" width="50" height="50">
                            
                        </td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->nombre}}</td>
                        <td>{{$product->desc}}</td>
                        <td>{{$product->precio}}</td>
                        <td width = "10px">
                            <a class = "btn btn-primary btn-sm" href="{{route('producto.edit', $product)}}">Editar</a>
                        </td>
                        <td width = "10px">
                            <form action = "{{route('producto.destroy', $product)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class = "btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop