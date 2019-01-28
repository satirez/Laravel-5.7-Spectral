@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase"> Sesiones </h1>

                  
                </div>
                @can('sessions.create')
                                        <a href="{{route('sessions.create')}}" 
                                            class="btn btn-raised btn-primary btn-sm"> 
                                            <i class="fas fa-plus"> </i>
                                            Crear Sesion
                                        </a>
                                    @endcan
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="">
                                <th width="10px">ID</th>
                                <th>Psicologo</th>
                                <th>Paciente</th>
                                <th>Historial</th>
                                <th colspan="3"><input class="form-control" id="myInput" type="text" placeholder="Buscar por...">
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($sessions as $session)
                            <tr>
                                <td>{{ $session->id }}</td>
                                <td>{{ $session->psicologo->name }}</td>
                                <td>
                                    <a href="{{ route('users.show', $session->paciente->id)}}" > 
                                            {{ $session->paciente->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('historials.show', $session->id) }}" 
                                    class="btn btn-raised btn-success"> 
                                    <i class="fas fa-list-ul"></i>
                                    </a>
                                </td>

                                @can('sessions.show')
                                <td width="10px">
                                    <a href="{{ route('sessions.show', $session->id) }}" 
                                    class="btn btn-raised btn-info"> 
                                    <i class="fas fa-eye"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                                
                                @can('sessions.edit')
                                <td width="10px">
                                    <a href="{{ route('sessions.edit', $session->id) }}" 
                                    class="btn btn-raised btn-primary">
                                    <i class="fas fa-edit"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$sessions->render()}}

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
