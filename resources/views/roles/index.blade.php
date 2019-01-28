@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Roles</h1>

                     @can('roles.create')
                        <a href="{{route('roles.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus icon-2x"> </i>
                            Crear ROL
                        </a>

                        
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-success">
                                <th width="10px">ID</th>
                                <th scope="col">Rol</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td scope="col">{{ $role->id }}</td>
                                <td scope="col">{{ $role->name }}</td>

                                @can('roles.show')
                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}" 
                                   class="btn btn-raised btn-primary btn-sm"> 
                                    <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td width="10px">
                                    <a href="{{ route('roles.edit', $role->id) }}" 
                                    class="btn btn-raised btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>

                                    </a>
                                </td>
                                @endcan
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$roles->render()}}
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection
