@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Bienvenido {{ auth()->user()->name }}</h3></div>
                
                <div class="card-body">
                    <h4> Instituto: {{ auth()->user()->lugar->name }}</h4>
                                

                    <ul>
                      <a class="nav-link" href="{{ route('homepaciente')}}">Roles</a>

                       
                       
                    </ul>
                </div>
            </div>
 @can('accesodirecto')
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-center">Accesos Directos</h3>
                </div>

                <div class="card-body">

                    <div class="table-responsive"> 
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th class="font-weight-bold text-center">Acceso</th>
                                <th class="font-weight-bold text-center">Vinculo</th>
                            </tr>
                            
                            @can('patients.create')
                                <tr>
                                    <td>
                                        Agregar Nuevo Paciente
                                    </td>
                                    <td class="text-center">
                                            <a href="{{route('patients.create')}}" 
                                                class="btn btn-raised btn-primary btn-sm"> 
                                                <i class="fas fa-user-plus"> </i> 
                                            </a>
                                    </td>
                                </tr>
                            @endcan
                            @can('sessions.create')
                                <tr>
                                    <td>
                                        Agregar Sesion
                                    </td>
                                    <td class="text-center">
                                            <a href="{{route('sessions.create')}}" 
                                                class="btn btn-raised btn-primary btn-sm"> 
                                                <i class="fas fa-plus"> </i>
                                            </a>
                                    </td>
                                </tr>
                            @endcan
                            @can('historials.create')
                                <tr>
                                    <td>
                                        Agregar nueva sesion al historial
                                    </td>
                                    <td class="text-center">
                                        
                                            <a href="{{route('sessions.create')}}" 
                                                class="btn btn-raised btn-primary btn-sm"> 
                                                <i class="fas fa-plus"> </i>
                                            </a>
                                        
                                    </td>
                                </tr>
                            @endcan
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
@endcan


        </div>
    </div>
</div>
@endsection
