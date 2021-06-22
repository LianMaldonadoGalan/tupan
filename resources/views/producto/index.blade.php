@if((Auth::user()->usertype)!=0)
    <script>
    window.location = "/";
  </script>
@endif
@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>Productos</h1>
@stop

@section('content')
<p>Lista de productos</p>




<div class="card">

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card-header">
        <a class="btn btn-success btn-lg" href="{{route('producto.create')}}">Agregar Producto</a>

    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>IMAGEN</th>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                    <th>CATEGORIA</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $product)
                <tr>
                    <td width="5px">
                        <img src="{{asset('images/'.$product->imgpath) }}" alt="{{$product->nombre}}" width="50" height="50">

                    </td>
                    <td>{{$product->id}}</td>
                    <td><a href="{{route('producto.show', $product)}}">{{$product->nombre}}</a></td>
                    <td>{{$product->desc}}</td>
                    <td>${{$product->precio}}</td>
                    <td>{{$product->categoria->nombre}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('producto.edit', $product)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('producto.destroy', $product)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta seguro de que quiere eliminar este producto? Esto no se puede deshacer!')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

