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
    <p>Crear producto</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'producto.store', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingresa nombre del producto']) !!}

                    @error('nombre')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'Descripcion') !!}
                    {!! Form::text('desc', null, ['class' => 'form-control','placeholder' => 'Ingresa descripcion del producto']) !!}
                
                    @error('desc')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('precio', 'Precio') !!}
                    {!! Form::number('precio', null, ['class' => 'form-control','step' => 'any']) !!}

                    @error('precio')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
    
               </div>

               <div class="form-group">
                    {!! Form::label('imgpath', 'Imagen') !!}
                    <br>
                    {!! Form::file('imgpath', ['class' => 'form-control-file','accept' => 'image/*']) !!}
                    
                    @error('imgpath')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
    
               </div>

                {!! Form::submit('Crear producto', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop