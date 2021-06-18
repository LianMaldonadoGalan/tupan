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
    <p>Editar producto</p>
    <div class="card">

        @if (session('info'))
        
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
     
        @endif

        <div class="card-body">
            {!! Form::model($producto, ['route' => ['producto.update', $producto],'files' => true, 'method' => 'put']) !!}
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

               <div>
                    {!! Form::label('', 'Imagen Actual') !!}
                    <br>
                    <img src = "{{asset('images/'.$producto->imgpath) }}" alt="{{$producto->nombre}}" width="300" height="300">  
               </div>

               <div class="form-group">
                    {!! Form::label('imgpath', 'Imagen') !!}
                    <br>
                    {!! Form::file('imgpath', ['class' => 'form-control-file','accept' => 'image/*']) !!}
                    
                    @error('imgpath')
                        <span class = "text-danger">{{$message}}</span>
                    @enderror
    
               </div>

                {!! Form::submit('Actualizar producto', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop