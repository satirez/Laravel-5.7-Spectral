@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           

                <div class="card">
                    <div class="card-header">
                        <h3> Reportes Especificos </h3>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                  <div class="card-body">
                                        <h5 class="card-title">
                                            Pie Chart
                                        </h5>
                                        <p class="card-text">
                                            Acá esta el reporte del pie chart
                                        </p>
                                    </div>
                                    <div class="card-header">
                                        <!-- Styles -->
                                        <style>
                                        #pie {
                                            width       : 100%;
                                            height      : 500px;
                                            font-size   : 11px;
                                        }                           
                                        </style>

                                        <!-- Resources -->
                                        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                                        <script src="https://www.amcharts.com/lib/3/pie.js"></script>
                                        <script src="https://www.amcharts.com/lib/3/serial.js"></script>

                                        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                                        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
                                        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

                                        <!-- Chart code -->
                                        <script>
                                        var chart = AmCharts.makeChart( "pie", {
                                          "type": "pie",
                                          "theme": "light",
                                          "dataProvider": [ {
                                            "title": "No",
                                            "value": 212
                                          }, {
                                            "title": "Alta",
                                            "value": 333
                                          } ],
                                          "titleField": "title",
                                          "valueField": "value",
                                          "labelRadius": 5,

                                          "radius": "42%",
                                          "innerRadius": "60%",
                                          "labelText": "[[title]]",
                                          "export": {
                                            "enabled": true
                                          }
                                        } );
                                        </script>

                                        <!-- HTML -->
                                        <div id="pie"></div> 
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- otro más </!-->

                            <div class="col-12">
                                <div class="card">
                                  <div class="card-body text-center">
                                        <h5 class="card-title text-uppercase">
                                           Total de usuarios
                                        </h5>
                                        <p class="card-text">
                                          Del instituto: {{ auth()->user()->lugar->name }}
                                        </p>
                                    </div>
                                    <div class="card-header">
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
                                          "dataProvider": [{
                                            "country": "Total Usuarios",
                                            "visits": {{ $totalusuarios }},
                                            "color": "#FF0F00"
                                          }, {
                                            "country": "Psicologos",
                                            "visits": {{ $totalpsicologos }},
                                            "color": "#FF6600"
                                          }, {
                                            "country": "Pacientes",
                                            "visits": {{ $totalpacientes }},
                                            "color": "#FF9E01"
                                          },{
                                            "country": "Secretarias",
                                            "visits": {{ $totalsecretarias }},
                                            "color": "#FF9E01"
                                          },{
                                            "country": "Directores",
                                            "visits": {{ $totaldirectores }},
                                            "color": "#FF9E01"
                                          }
                                          ],
                                          "valueAxes": [{
                                            "axisAlpha": 0,
                                            "position": "left",
                                            "title": "Total de usuarios"
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
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
