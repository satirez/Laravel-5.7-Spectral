@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-uppercase">Ficha de {{$session->paciente->name }} </h1>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                            <table class="table table-bordered">
                                 <caption>Detalle de la sesión</caption>
                                 
                                <thead>
                                 <tr>
                                     <th colspan="4" class="text-center text-uppercase">Hoja Historial Clinica Psicologica</th>
                                 </tr>
                                 <tr>
                                     <th colspan="4" class="text-left text-uppercase"> Identificación del Paciente </th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Nombre</th>
                                     <th>{{ $session->paciente->name }} {{ $session->paciente->apellidos }} </th>
                                     <th class="font-weight-bold">Rut</th>
                                     <th>{{ $session->paciente->rut }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Domicilio</th>
                                     <th>{{ $session->paciente->direccion }}</th>
                                     <th class="font-weight-bold">Telefono</th>
                                     <th>{{ $session->paciente->telefono }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Comuna</th>
                                     <th>{{ $session->paciente->comuna->name }}</th>
                                     <th class="font-weight-bold">Región</th>
                                     <th>{{ $session->paciente->region->name }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Fecha de Nac</th>
                                     <th>{{ $session->paciente->fechanacimiento }}</th>
                                     <th class="font-weight-bold">Edad</th>
                                     <th>{{ $session->paciente->fechanacimiento }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Fonasa</th>
                                     <th>{{ $session->paciente->fonasa->name }}</th>
                                 </tr>

                                 <tr>
                                     <th colspan="4" class="text-left text-uppercase"> Datos del caso </th>
                                 </tr>
                                <tr>
                                     <th class="font-weight-bold">N° de Caso</th>
                                     <th>{{ $session->id }} </th>
                                     <th class="font-weight-bold">Estado</th>
                                     <th>{{ $session->estado }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Atendido por</th>
                                     <th>{{ $session->psicologo->name }} {{ $session->psicologo->apellidos }}</th>
                                     <th class="font-weight-bold">N° de Sesiones</th>
                                     <th>{{ '32' }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Fecha de Inicio</th>
                                     <th>{{ $session->start_date }}</th>
                                     <th class="font-weight-bold">Fecha de Termino</th>
                                     <th>{{ $session->end_date }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Motivo de Consulta</th>
                                     <th>{{ $session->motivoconsulta }}</th>
                                     <th class="font-weight-bold">Diagnostico</th>
                                     <th>{{ $session->diagnostico }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Medicado</th>
                                     <th>{{ $session->medicado }}</th>
                                     <th class="font-weight-bold">Derivado de</th>
                                     <th>{{ $session->derivadode->name }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Discapacidad</th>
                                     <th>{{ $session->discapacitado }}</th>
                                     <th class="font-weight-bold">Orientación Sexual</th>
                                     <th>{{ $session->orientacion->name }}</th>
                                 </tr>
                                 <tr>
                                     <th class="font-weight-bold">Consumo de Drogas</th>
                                     <th>{{ $session->drogas }}</th>
                                 </tr>
                                 
                                </thead>
                            </table>
                    </div>

                </div>
             </div>
        </div>
     </div>
 </div>




 @endsection