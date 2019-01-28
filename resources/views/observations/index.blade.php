@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Observaciones</h1>
                        
                     @can('secretarys.create')
                        <a href="{{route('observations.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus"> </i> Nueva Observación</a>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-success">
                                <th scope="col">Descripción</th>
                                <th scope="col">Nivel (Menor es mejor)</th>
                                <th scope="col">Fecha</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($observations as $observation)
                            <tr>
                                <td>{{ $observation->descripcion }}</td>
                                <td>{{ $observation->level_id }}</td>
                                <td>{{ \Carbon\Carbon::parse($observation->fecha)->format('d/m/Y')}}</td>

                                @can('secretarys.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $observation->id) }}" 
                                    class="btn btn-raised btn-primary">
                                    <i class="fas fa-edit"></i>

                                    </a>
                                </td>
                                @endcan
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$observations->render()}}

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
