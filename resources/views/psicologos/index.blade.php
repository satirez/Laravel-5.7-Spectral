@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Psicologos</h1>

                     @can('psicologos.create')
                        <a href="{{route('psicologos.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus"> </i> Nuevo Psicologo</a>
                    @endcan
                </div>

           <div class="table-responsive">

                    <table class="table table-hover" >
                        <thead>
                            <tr class="bg-success">
                                <th width="10px">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Rut</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Region</th>
                                <th scope="col">Comuna</th>

                                <th scope="col">Institución</th>

                                <th colspan="3"><input class="form-control" id="myInput" type="text" placeholder="Buscar por...">
</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($psicologos as $psicologo)
                            <tr>
                                <td>{{ $psicologo->id }}</td>
                                <td>{{ $psicologo->name }}</td>
                                <td>{{ $psicologo->rut }}</td>
                                <td>{{ $psicologo->sexo }}</td>
                                <td>{{ $psicologo->region->name }}</td>
                                <td>{{ $psicologo->comuna->name }}</td>
                                <td>{{ $psicologo->lugar->name }}</td>

                                @can('psicologos.show')
                                <td width="10px">
                                    <a href="{{ route('psicologos.show', $psicologo->id) }}" 
                                    class="btn btn-raised btn-primary"> 
                                    <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('psicologos.edit')
                                <td width="10px">
                                    <a href="{{ route('psicologos.edit', $psicologo->id) }}" 
                                    class="btn btn-raised btn-success">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                @endcan
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$psicologos->render()}}
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


