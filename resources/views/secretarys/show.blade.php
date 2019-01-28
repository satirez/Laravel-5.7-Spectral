@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Perfil de usuario de <strong>{{ $user->name }}</strong></h1>

                    <div class="row pull-right">
                        
                        
                            @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}" 
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                            @endcan

                            @can('users.destroy')
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                            @endcan
                    </div>
                </div>

                <div class="card-body">
     
                                <p><strong>Nombre: </strong>{{ $user->name }}</p>
                                <p><strong>Rut: </strong>{{ $user->rut }}</p>
                                <p><strong>Apellidos: </strong>{{ $user->apellidos }}</p>
                                <p><strong>E-Mail: </strong>{{ $user->email }}</p>
                                <p><strong>Telefono: </strong>{{ $user->telefono }}</p>
                                <p><strong>Sexo: </strong>{{ $user->sexo }}</p>
                                <p><strong>Fecha de Nacimiento: </strong>{{ $user->fechanacimiento }}</p>
                                <p><strong>Región: </strong>{{ $user->region->name }}</p>
                                <p><strong>Comuna: </strong>{{ $user->comuna->name }}</p>
                                <p><strong>Dirección: </strong>{{ $user->direccion }}</p>
                                <p><strong>Nivel Socio Economico: </strong>{{ $user->nivelse->name }}</p>
                                <p><strong>Fonasa: </strong>{{ $user->fonasa->name }}</p>
                                <p><strong>Tipo de Usuario: </strong>{{ $user->tipo->name }}</p>
                                <p><strong>Institución: </strong>{{ $user->lugar->name }}</p>
                </div>

             </div>
        </div>
     </div>
 </div>

 @endsection