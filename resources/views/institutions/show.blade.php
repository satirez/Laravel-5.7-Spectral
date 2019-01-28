@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

             <style>
                #map-canvas{
                 width:750px;
                 height:500px;
                }
            </style>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYG5g2aJ9TjMlbYk7E_VuFYKSvHC1Ee6Y&libraries=places" type="text/javascript"></script>

                    <h1 class="text-center">Institución: {{$institution->name}}</h1>
                </div>
                
                
                <div class="row">
                    <div class="col-6">

                     <div> <img class="img-thumbnail rounded mx-auto d-block" alt="Responsive image" 
                      width="380" 
                      src="{{ $institution->logo }}" 
                      alt="">

                    </div>

                    </div>

                    <div class="col-md-4 ">
                        <p><strong>Nombre</strong>  {{ $institution->name}} </p>
                        <p><strong>Dirección</strong>  {{ $institution->direccion}} </p>
                        <p><strong>Rut</strong>  {{ $institution->rut}} </p>
                        <p><strong>Comuna</strong>  {{ $institution->reg->name}} </p>
                        <p><strong>Comuna</strong>  {{ $institution->com->name}} </p>
                        <p><strong>Fono</strong>  {{ $institution->fono}} </p>
                        <p><strong>Servicio</strong>  {{ $institution->categoria->name }} </p>
                        <p><strong>Sitio web</strong> <a target="_blank" href="https://{{ $institution->sitioweb }}"> {{ $institution->sitioweb }}</a></p>
                    </div>
                </div>
                    <hr>
                    <h4 class="text-center"> Ubicación geografica </h4>
                <div class="row">
                    <div class="col">
                        <div id="map-canvas" class="rounded mx-auto d-block"></div>
                    </div>
                </div>

                <div class="card-body">

              
                

               
                </div>
             </div>
        </div>
     </div>
 </div>


<script>
    
    var lat = {{ $institution->lat }};
    var lng = {{ $institution->lng }};

   var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center:{ lat: lat, lng: lng
        },
        zoom:7
    });


    var marker= new google.maps.Marker({
         position:{
          lat: lat,
          lng: lng
         },
         map:map,
        });



</script>
 @endsection