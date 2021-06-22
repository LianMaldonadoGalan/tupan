@if((Auth::user()->usertype)!=0)
<script>
    window.location = "/";
</script>
@endif
@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>Newsletter</h1>
@stop

@section('content')
<p>Lista de usuarios suscritos</p>


<div class="card">

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>SUSCRITO EN</th>
                    <th>ESTADO</th>
                    <th>DESHABILITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletter as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        @if ($user->enabled == 1)

                        {{'Habilitado'}}

                        @else

                        {{'Deshabilitado'}}

                        @endif
                    </td>

                    <td width="10px">
                        {!! Form::model($newsletter, ['route' => ['newsletter.update', $user->id], 'method' => 'PATCH']) !!}
                        
                        {!! Form::submit('Deshabilitar', ['class' => 'btn btn-info btn-sm', 'onclick' => 'return confirm("¿Esta seguro de que quiere deshabilitar este usuario?")']) !!}

                        {!! Form::close() !!}
                    </td>
                    <td width="10px">
                        <form action="{{route('newsletter.destroy', $user)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta seguro de que quiere eliminar este email?')">Eliminar</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop