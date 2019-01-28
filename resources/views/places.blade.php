<!DOCTYPE HTML>

<html>
    <head>
        <title>Spectral</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="homelayout/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="homelayout/assets/css/noscript.css" /></noscript>
    </head>
    <body class="landing is-preload">

        <!-- Page Wrapper -->
            <div id="page-wrapper">

                <!-- Header -->
                    <header id="header" class="alt">
                        <h1><a href="index.html">Spectral</a></h1>
                        <nav id="nav">
                            <ul>
                                <li class="special">
                                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                                    <div id="menu">
                                        <ul>
                                            <li>
                                                  @if (Route::has('login'))
                                                    @auth
                                                        <a href="{{ url('/home') }}"> Spectral</a>
                                                    @else
                                                        <a href="{{ route('login') }}">Iniciar Sesion</a>
                                                    @endauth
                                                @endif
                                            </li>
                                            <br>
                                            <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                            <li><a href="{{ route('contacto') }}">Contactanos</a></li>
                                            <li><a href="{{ route('places') }}">Institutos que confian en Nosotros</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </header>

                <!-- Main -->
                    <article id="main">
                        <header>
                            <h2>Institutos</h2>
                            <p>Que confian en nosotros</p>
                        </header>
                        <section class="wrapper style5">
                            <div class="inner">

                                  <style>
                                    #map-canvas{
                                     width:100%;
                                     height:800px;
                                    }
                                </style>

                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYG5g2aJ9TjMlbYk7E_VuFYKSvHC1Ee6Y&libraries=places" type="text/javascript">
                                </script>
                                
                                <h3>Lista de todos los institutos</h3>
                                <p>
                                    <h5> Existen {{ $contador }} institutos en nuestra red, encuentra el tuyo más cerca!</h5>
                                </p>
                                <div id="map-canvas"></div>

                            </div>
                        </section>
                    </article>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                        <ul class="copyright">
                            <li>&copy; Spectral</li><li>Creado por: <a href="">Middlesoft</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->



        <script type="text/javascript">

                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center:{ lat:-34.7585596, lng:-72.0680056
                    },
                    zoom:7
                });

                 var features = [
                  @foreach ($institutions as $institution)
                    {
                       position: new google.maps.LatLng({{ $institution->lat }}, {{ $institution->lng }}),
                       nombre: '{{ $institution->name }}',
                       fono: '{{ $institution->fono }}',
                       logo: '{{ $institution->logo }}',
                       website: '{{ $institution->sitioweb }}',
                       direccion: '{{ $institution->direccion }}',
                    },
                  @endforeach
                  ];
          
                   features.forEach(function(feature) {
                      var marker = new google.maps.Marker({
                        position: feature.position,
                        animation: google.maps.Animation.DROP,
                        map: map
                      });


                    var infowindow = new google.maps.InfoWindow({
                        content: '<div> <h3>' +feature.nombre +    '</h3> </div> ' + 
                        '<img width="200px" src="'+feature.logo + '">'+
                        ' <br>  <h5> Fono </h5>' +feature.fono + ' <br>' +
                        '<h5> Dirección </h5>' +feature.direccion + '<br>' + 
                        '<h5> Sitio Web </h5>' + '<a href="'+ feature.website + '">'+ feature.website  + '</a>' + '<br>',

                        maxWidth: 500
                      });

                    marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                    
                });

        </script>
   
            

            <script src="homelayout/assets/js/jquery.scrollex.min.js"></script>
            <script src="homelayout/assets/js/jquery.scrolly.min.js"></script>
            <script src="homelayout/assets/js/browser.min.js"></script>
            <script src="homelayout/assets/js/breakpoints.min.js"></script>
            <script src="homelayout/assets/js/util.js"></script>
            <script src="homelayout/assets/js/main.js"></script>

    </body>
</html>