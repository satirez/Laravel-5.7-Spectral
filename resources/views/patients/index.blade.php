@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="text-center text-uppercase">Pacientes</h1>

                     @can('patients.create')
                        <a href="{{route('patients.create')}}" class="btn btn-raised btn-primary"> <i class="fas fa-user-plus"> </i> Nuevo Paciente</a>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-success">
                                <th width="10px">ID</th>
                                <th scope="col" >Nombre</th>
                                <th scope="col" >Apellido</th>
                                <th scope="col" >Sexo</th>
                                <th scope="col" >Region</th>
                                <th scope="col" >Comuna</th>
                                <th scope="col" >Institución</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td>{{ $patient->id }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->apellidos }}</td>
                                <td>{{ $patient->sexo }}</td>
                                <td>{{ $patient->region->name }}</td>
                                <td>{{ $patient->comuna->name }}</td>
                                <td>{{ $patient->lugar->name }}</td>

                                @can('patients.show')
                                <td width="10px">
                                    <a href="{{ route('patients.show', $patient->id) }}" 
                                    class="btn btn-raised btn-primary"> 
                                    <i class="fas fa-eye"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                                @can('patients.edit')
                                <td width="10px">
                                    <a href="{{ route('patients.edit', $patient->id) }}" 
                                    class="btn btn-raised btn-success">
                                    <i class="fas fa-edit"></i>
                                        
                                    </a>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$patients->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
