@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PROVEEDORES</h1>
@stop

@section('content')
    <div class="card">
            <div class="card-header bg-secondary">
                Header
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="table-primary">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>OPCIONES</th>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->id}}</td>
                            <td>{{$proveedor->laboratorio}}</td>
                            <td>{{$proveedor->direccion}}</td>
                            <td>  
                                <button class="btn"><i class="fas fa-trash-alt text-danger"></i></button>
                                <button class="btn"><i class="far fa-edit text-info"></i></button>
                                <button class="btn"><i class="fas fa-eye text-success"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



