@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Rol{{ $role->name }}</h1>

                    <div class="row pull-right">
                        
                            @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id) }}" 
                                    class="btn btn-sm btn-primary">
                                        editar
                                    </a>
                                @endcan

                                @can('roles.destroy')
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                @endcan
                    </div>
                </div>

                <div class="card-body">
                                
                                <p><strong>ID: </strong>{{ $role->id }}</p>
                                <p><strong>Nombre: </strong>{{ $role->name }}</p>
                                <p><strong>Permisos</strong></p>
                                    

                                <ul class="list-unstyled">

                                    @foreach($permissions as $permission)
                                        <li>
                                            <label>
                                                {{ $permission->permission_id }}

                                            </label>
                                        </li>
                                    @endforeach
                                </ul>


                </div>

             </div>
        </div>
     </div>
 </div>

 @endsection