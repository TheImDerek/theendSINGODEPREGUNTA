@extends('layouts.master')

@section('titulo')
@if((isset($clientes)) and (is_object($clientes)))
    modificacion de datos de usuario
    @php
    $title1='MODIFICAR DATOS';
    $nombre=$clientes->nombre;
    $apellido=$clientes->apellido;
    $direccion=$clientes->direccion;
    $codigopostal=$clientes->codigopostal;
    $telefono=$clientes->telefono;
    $idcliente=$clientes->idcliente;
    @endphp
    @else
    Agregar usuario
    @php
    $title1='Agregar Usuario';
    $nombre='';
    $apellido='';
    $direccion='';
    $codigopostal='';
    $telefono='';
    $idcliente='';
    @endphp
    @endif
@stop

@section('content')
<div></div>
<form action="{{isset($clientes) ?  action('ClientesController@update') : action('ClientesController@save')}}" method="post" >
        {{csrf_field()}}
        @if((isset($clientes)) and (is_object($clientes)))
        <input type="hidden" name="idcliente" value="{{$idcliente}}">
        @endif
        <label for="nombre_cliente">Nombre</label>
        <input type="text" name="nombre" value="{{$nombre}}">
        <br>
        <label for="apellido_cliente">Apellido</label>
        <input type="text" name="apellido" value="{{$apellido}}">
        <br>
        <label for="direccion_cliente">Direccion</label>
        <input type="text" name="direccion" value="{{$direccion}}">
        <br>
        <label for="codigo_postal_cliente">Codig postal</label>
        <input type="text" name="codigopostal" value="{{$codigopostal}}">
        <br>
        <label for="telefono_cliente">Telefono</label>
        <input type="text" name="telefono" value="{{$telefono}}">
        <br>
        <input type="submit" value="submit">
    </form>
@stop