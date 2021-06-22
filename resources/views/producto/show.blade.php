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
    <p>Detalles del producto: </p>

    {!! Form::model($producto, ['url' => ['admin/productos']]) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control','readonly' => 'true']) !!}

                    @error('nombre')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'Descripcion') !!}
                    {!! Form::text('desc', null, ['class' => 'form-control','readonly' => 'true']) !!}
                
                    @error('desc')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('precio', 'Precio') !!}
                    {!! Form::number('precio', null, ['class' => 'form-control','step' => 'any','readonly' => 'true']) !!}

                    @error('precio')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
    
               </div>

               <div>
                    {!! Form::label('', 'Imagen Actual') !!}
                    <br>
                    <img src = "{{asset('images/'.$producto->imgpath) }}" alt="{{$producto->nombre}}" width="300" height="300">  
               </div>
                <br>
            {!! Form::close() !!}
@stop