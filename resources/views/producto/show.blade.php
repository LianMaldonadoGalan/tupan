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
@stop