@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Usuarios</h1>

                     @can('users.create')
                        <a href="{{route('users.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus"> </i> Nuevo Usuario </a>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-success">
                                <th width="10px">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Tipo de Usuario</th>

                                <th>Institución</th>
                                <th colspan="3"><input class="form-control" id="myInput" type="text" placeholder="Buscar por...">

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellidos }}</td>
                                <td>{{ $user->sexo }}</td>
                                <td>{{ $user->tipo->name }}</td>
                                <td>{{ $user->lugar->name }}</td>

                                @can('users.show')
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}" 
                                   class="btn btn-raised btn-primary"> 
                                    <i class="fas fa-eye"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                                @can('users.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}" 
                                    class="btn btn-raised btn-success">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                @endcan

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$users->render()}}

                    <script>
                    $(document).ready(function(){
                      $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function() {
                          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                      });
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
