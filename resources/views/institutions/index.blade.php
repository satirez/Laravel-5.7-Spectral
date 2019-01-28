@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Instituciones</h1>

                     @can('institutions.create')
                        <a href="{{route('institutions.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus"> </i>
                        Nueva Institución
                        </a>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped table-borderless">
                        <thead>
                            <tr class="">
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Region</th>
                                <th>Comuna</th>
                                <th>Categoria</th>
                              <th colspan="3">

<input class="form-control" id="myInput" type="text" onkeyup="myFunction()" placeholder="Buscar por...">

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($institutions as $institution)
                            <tr>
                                <td>{{ $institution->id }}</td>
                                <td>{{ $institution->name }}</td>
                                <td>{{ $institution->direccion }}</td>
                                <td>{{ $institution->reg->name }}</td>
                                <td>{{ $institution->com->name }}</td>
                                <td>{{ $institution->categoria->name }}</td>
                           
                                @can('institutions.show')
                                <td width="10px">
                                    <a href="{{ route('institutions.show', $institution->id) }}" 
                                    class="btn btn-raised btn-primary"> 
                                    <i class="fas fa-eye"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                                @can('institutions.edit')
                                <td width="10px">
                                    <a href="{{ route('institutions.edit', $institution->id) }}" 
                                    class="btn btn-raised btn-success">
                                    <i class="fas fa-edit"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$institutions->render()}}

                </div>
            </div>
        </div>
    </div>




                         <script>
                            function myFunction() {
                              // Declare variables 
                              var input, filter, table, tr, td, i, txtValue;
                              input = document.getElementById("myInput");
                              filter = input.value.toUpperCase();
                              table = document.getElementById("myTable");
                              tr = table.getElementsByTagName("tr");

                              // Loop through all table rows, and hide those who don't match the search query
                              for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0];
                                if (td) {
                                  txtValue = td.textContent || td.innerText;
                                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                  } else {
                                    tr[i].style.display = "none";
                                  }
                                } 
                              }
                            }
                         </script>
</div>
@endsection
