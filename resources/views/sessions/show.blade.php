@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-uppercase">Sesión de {{$session->paciente->name }} </h1>

                    <div class="col-md-12">
                            

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
                            
                            <tr>
                                <td>
                                    Editar Ficha
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-raised btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>Editar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                    <td>
                                        Ficha Completa
                                    </td>
                                    <td class="text-center">
                                      <a href="{{ route('sessions.ficha', $session->id) }}" class="btn btn-raised btn-danger btn-sm "> Ver ficha completa </a>        
                                    </td>
                            </tr>
                            <tr>
                                    <td>
                                        Observaciones
                                    </td>
                                    <td class="text-center">     
                                        <a href="{{ route('observations.show', $session->id) }}" 
                                            class="btn btn-raised btn-success btn-sm"> 
                                            <i class="fas fa-list-ul"></i>
                                            Todas las observaciones
                                        </a>
                                    </td>
                                </tr>
                            <tr>
                                <td>
                                    Historial
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('historials.show', $session->id) }}" 
                                    class="btn btn-raised btn-info btn-sm"> 
                                    <i class="fas fa-list-ul"></i>
                                    Historial de sesiones completo
                                </a>
                                </td>
                            </tr>

                             <tr>
                                <td>
                                    Actividades
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('activities.show', $session->id) }}" 
                                    class="btn btn-raised btn-warning btn-sm"> 
                                    <i class="fas fa-list-ul"></i>
                                    Todas las Actividades
                                </a>
                                </td>
                            </tr>
                        </div>
                                        
                                    </td>
                                </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
                    </div>
                </div>

                <div class="card-body">
                <!-- Inicio tabla de detalle </!-->
                    <div class="table-responsive">
                            <table class="table table-bordered">
                                 <caption>Detalle de la sesión </caption>
                                <thead>
                                 <tr class="bg-success">
                                     <th scope="col">Psicologo</th>
                                     <th scope="col">Paciente</th>
                                     <th scope="col">Terapia</th>
                                     <th scope="col">Inicio</th>
                                     <th scope="col">Fin</th>
                                     <th scope="col">Motivo de Consulta</th>
                                     <th scope="col">Diagnostico</th>
                                     <th scope="col">¿Medicado?</th>
                                     <th scope="col">Derivado de</th>
                                 </tr>
                                </thead>
                                <tbody> 
                                    <th>{{ $session->psicologo->name }}</th>
                                    <th>  <a href="{{ route('users.show', $session->paciente->id)}}" > {{ $session->paciente->name }}</a>
                                    </th>
                                    <th>{{ $session->terapia->name }} </th>
                                    <th>{{ $session->start_date }} </th>
                                    <th>{{ $session->end_date }} </th>
                                    <th>{{ $session->motivoconsulta }} </th>
                                    <th>{{ $session->diagnostico }} </th>
                                    <th>{{ $session->medicado }} </th>
                                    <th>{{ $session->derivadode->name }} </th>
                                </tbody>
                            </table>
                    </div>
                        <div class="text-center"> 
                              <a href="{{ route('sessions.ficha', $session->id) }}" 
                                    class="btn btn-raised btn-danger "> Ver ficha completa
                               </a>
                        </div>
                                   
                    <!-- Fin de tabla detalle  </!-->
        <hr>
        <div class="card">
            
             <h4 class="text-center text-uppercase"> Progresión entre sesiones de usuario (Veredicto Psicologo) </h4>
            <div id="caca">
                
            </div>

        </div>

        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.14/lang/es.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.14/plugins/export/lang/es.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <style> #caca { width   : 100%; height  : 500px; } </style>
                
                <hr> 
                <h4 class="text-center text-uppercase"> Observaciones </h4>

                @can('observations.create')
                    <a href="{{route('observations.create',$session->id)}}" class="btn btn-raised btn-success"> <i class="fas fa-plus"> </i> Crear Nueva Observación </a>
                @endcan
                    <hr>   
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="2" scope="col">Descripcion</th>
                                        <th colspan="1" scope="col">Rate (Menos es mejor) </th>
                                        <th colspan="1" scope="col">Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($observations as $observation)
                                    <tr>
                                        <td colspan="2">{{ $observation->descripcion }}</td>
                                        <!-- LEVEL  -->
                                            @if($observation->level_id <=2)
                                                <td>
                                                    <span class="badge badge-success">Bien</span>
                                                    {{ $observation->level_id }}
                                                </td>

                                            @elseif($observation->level_id <=3)
                                                <td>
                                                    <span class="badge badge-warning">Peligro</span>
                                                    {{ $observation->level_id }}
                                                </td>
                                            
                                            @elseif($observation->level_id >=4)
                                                <td>
                                                    <span class="badge badge-danger">Mal</span>
                                                    {{ $observation->level_id }}
                                                </td>
                                            @endif

                    
                                        <!-- END  -->
                                        <td colspan="1" >{{ $observation->fecha }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tbody> 
                                        <td class="text-uppercase"> <b> <h2> Promedio</h2></b> 
                                            <p>
                                                Promedio actual de las observaciones
                                            </p>
                                        </td>
                                        
                                        <td class="text-uppercase"> 
                                            @if($promobservation <=1.9)
                                                <td>
                                                    <h2><span class="badge badge-pill badge-success">Excelente {{ $promobservation }}</span></h2>
                                                    <p>
                                                        Su condición es excelente!
                                                    </p>
                                                </td>
                                            @elseif($promobservation <=2.9)
                                                <td>
                                                    <h2><span class="badge badge-pill badge-success">Bien {{ $promobservation }}</span></h2>
                                                    <p> 
                                                        Su condición es estable de momento
                                                    </p>
                                                </td>

                                            @elseif($promobservation <=3.9)
                                                <td>
                                                    <h2><span class="badge badge-pill badge-warning">Peligro {{ $promobservation }}</span></h2>
                                                    <p> 
                                                        Su condición es peligrosa, poner más atención a las observaciones
                                                    </p>
                                                </td>
                                            
                                            @elseif($promobservation >=4)
                                                <td>
                                                    <h2><span class="badge badge-pill badge-danger">Mal {{ $promobservation }} </span></h2>
                                                    <p class="">
                                                        Su situación se encuentra en peligro! por favor tener cuidado con el paciente 
                                                    </p>
                                                </td>
                                            @endif
                                        </td>
                                </tbody>
                            </table>
                        </div>
                         <div class="card-body">
                            <div class="card-title text-center">
                                <a href="{{ route('observations.show', $session->id) }}" 
                                    class="btn btn-raised btn-info"> 
                                    <i class="fas fa-list-ul"></i>
                                    Todas las observaciones
                                </a>
                            </div>
                        </div>
                    </div>

                                           

                 <hr>
                 <h4 class="text-center text-uppercase"> Historial de sesiones </h4>

                @can('historials.create')
                    <a href="{{ route('historials.create', $session->id) }}" 
                       class="btn btn-raised btn-danger "> Nueva fecha/ Nueva sesion
                    </a>
                @endcan
                 <hr>
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-success">
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Asistencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($historials as $historial)
                                    <tr>
                                        <td>{{ $historial->start_date }}</td>
                                        <!-- Asistencia -->

                                        @if($historial->asistencia_id <= 1)
                                            <td>
                                                <span class="badge badge-info">
                                                    {{ $historial->asistencia->name }}
                                                </span>   
                                            </td>
                                        @elseif($historial->asistencia_id <= 2)
                                            <td>
                                                <span class="badge badge-light">
                                                    {{ $historial->asistencia->name }}
                                                </span>   
                                            </td>
                                        @elseif($historial->asistencia_id <= 3)
                                            <td>
                                                <span class="badge badge-success">
                                                    {{ $historial->asistencia->name }}
                                                </span>   
                                            </td>
                                        @elseif($historial->asistencia_id <= 4)
                                            <td>
                                                <span class="badge badge-secondary">
                                                    {{ $historial->asistencia->name }}
                                                </span>   
                                            </td>
                                        @elseif($historial->asistencia_id <= 5)
                                            <td>
                                                <span class="badge badge-danger">
                                                    {{ $historial->asistencia->name }}
                                                </span>  
                                            </td>
                                        @endif

        

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-title text-center">
                                <a href="{{ route('historials.show', $session->id) }}" 
                                    class="btn btn-raised btn-info"> 
                                    <i class="fas fa-list-ul"></i>
                                    Historial de sesiones completo
                                </a>
                            </div>
                        </div>
                    </div>
                 <hr>
                 <!-- otro más </!-->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title text-center text-uppercase"> <h5>Reporte de asistencias de los usuarios</h5> </div>
                                       <!-- Styles -->
                                        <style>
                                        #barras {
                                          width: 100%;
                                          height: 500px;
                                        }
                                        .amcharts-export-menu-top-right {
                                          top: 10px;
                                          right: 0;
                                        }
                                        </style>

                                        <!-- Chart code -->
                                        <script>
                                        var chart = AmCharts.makeChart("barras", {
                                          "type": "serial",
                                          "theme": "light",
                                          "marginRight": 70,
                                          "dataProvider": [
                                          {
                                            "country": "Presente",
                                            "visits": {{ $contadorpresente }},
                                            "color": "#FF0F00"
                                          }, {
                                            "country": "Ausencia",
                                            "visits": {{ $contadorausente }},
                                            "color": "#FF6600"
                                          }, {
                                            "country": "Cancelado",
                                            "visits": {{ $contadorcanceladas }},
                                            "color": "#FF9E01"
                                          }
                                          ],
                                          "valueAxes": [{
                                            "axisAlpha": 0,
                                            "position": "left",
                                            "title": "Historial"
                                          }],
                                          "startDuration": 1,
                                          "graphs": [{
                                            "balloonText": "<b>[[category]]: [[value]]</b>",
                                            "fillColorsField": "color",
                                            "fillAlphas": 0.9,
                                            "lineAlpha": 0.2,
                                            "type": "column",
                                            "valueField": "visits"
                                          }],
                                          "chartCursor": {
                                            "categoryBalloonEnabled": false,
                                            "cursorAlpha": 0,
                                            "zoomable": false
                                          },
                                          "categoryField": "country",
                                          "categoryAxis": {
                                            "gridPosition": "start",
                                            "labelRotation": 45
                                          },
                                          "export": {
                                            "enabled": true
                                          }

                                        });
                                        </script>

                                        <!-- HTML -->
                                        <div id="barras"></div>      
                                    </div>
                                   
                                </div>

                    <!-- Actividades </!-->
                    <hr>

                    <h4 class="text-center text-uppercase"> Actividades </h4>

                    @can('observations.create')
                        <a href="{{route('observations.create','$session->psicologo_id')}}" class="btn btn-raised btn-info"> <i class="fas fa-plus"> </i> Nueva Actividad </a>
                    @endcan

                    <div class="card">
                          <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-info">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activities as $activitie)
                                    <tr>
                                        <td>{{ $activitie->name }}</td>
                                        <td>{{ $activitie->estado }}</td>

                                        @if ($activitie->estado = "Realizado" )
                                            <td>
                                                <span class="badge badge-Success">
                                                    {{ $activitie->estado }}
                                                </span>   
                                            </td>
                                        @elseif($activitie->estado = "Pendiente") 
                                            <td>
                                                <span class="badge badge-warning">
                                                    {{ $activitie->estado }}
                                                </span>   
                                            </td>
                                        @endif

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                               
                        </div>
                        <div class="card-body">
                            <div class="card-title text-center">
                                <a href="{{ route('activities.show', $session->id) }}" 
                                    class="btn btn-raised btn-info"> 
                                    <i class="fas fa-list-ul"></i>
                                    Todas las Actividades
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

             </div>
        </div>
     </div>
 </div>

 

   
 <script>
     
        var chart = AmCharts.makeChart("caca", {
            "type": "serial",
            "theme": "dark",
            "language": "es",
            "marginRight": 40,
            "marginLeft": 40,
            "autoMarginOffset": 20,
            "mouseWheelZoomEnabled":true,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "ignoreAxisWidth":true
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "balloon":{
                  "drop":true,
                  "adjustBorderColor":false,
                  "color":"#ffffff"
                },
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":30,
                "scrollbarHeight": 80,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color":"#AAAAAA"
            },
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":1,
                "cursorColor":"#258cbb",
                "limitToGraph":"g1",
                "valueLineAlpha":0.2,
                "valueZoomable":true
            },
            "valueScrollbar":{
              "oppositeAxis":false,
              "offset":50,
              "scrollbarHeight":10
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            },
            "dataProvider": [

        @foreach ($observationsGrafic as $lol)
                    { "date" : "{{ date('Y-m-d', strtotime($lol->fecha)) }} " ,
                    "value" : {{ $lol->level_id }} },
        @endforeach

            ]
        });

        chart.addListener("rendered", zoomChart);

        zoomChart();

        function zoomChart() {
            chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
        }
 </script>


 @endsection