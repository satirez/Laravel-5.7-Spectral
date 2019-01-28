@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Actividades</h1>
                        
                     @can('secretarys.create')
                        <a href="{{route('activities.create')}}" class="btn btn-primary btn-md"> <i class="fas fa-user-plus"> </i></a>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-success">
                                <th scope="col">Actividad</th>
                                <th scope="col">Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($activities as $activitie)
                            <tr>
                                <td>{{ $activitie->name }}</td>
                                <td>{{ $activitie->estado }}</td>

                                @can('secretarys.edit')
                                <td width="10px">
                                    <a href="{{ route('activities.edit', $activitie->id) }}" 
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>

                                    </a>
                                </td>
                                @endcan
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$activities->render()}}

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
