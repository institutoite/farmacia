@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR PROVEEDOR</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-danger">
            FORMULARIO CREAR PROVEEDOR
        </div>
        <div class="card-body">
            <form action="{{route('proveedore.guardar')}}" method="POST">
                @csrf
                <label for="">Laboratorio</label>
                <input class="form-control" type="text" name="laboratorio">
                
                <label for="">dirección</label>
                <input class="form-control" type="text" name="direccion">

                <input class="btn btn-primary mt-3" type="submit" value="Guardar">
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



