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
                            <h2>Nosotros</h2>
                            <p> Nuestra Historia</p>
                        </header>
                        <section class="wrapper style5">
                            <div class="inner">

                                 
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYG5g2aJ9TjMlbYk7E_VuFYKSvHC1Ee6Y&libraries=places" type="text/javascript">
                                </script>
                                
                                <div class="image"><img src="homelayout/images/logo2.png" alt="" /></div><div class="content">
                                <p>“MiddleSoft (MS)” es una empresa de desarrolladores independientes que no pertenece a ninguna empresa distribuidora de tipo Sociedad de Responsabilidad Limitada. Empresa del sector secundario que depende del capital de procedencia privada en el rubro de desarrollo y distribución de aplicaciones tanto de escritorio, web e hibridas como aplicaciones móviles en donde el giro es Servicios profesionales
                                Persona jurídica, legamente constituida. Con fines de Lucro y parte de Sociedad Anónima
                                </p>

                                <h3>Servicio</h3>
                                <p> La empresa entrega servicios para el desarrollo y construcción de aplicaciones en general, ya sea web, escrito y móvil. Tanto como el equipo de desarrollo y la administración cuenta con capacidades necesarias para crear Aplicaciones en diferentes plataformas como móvil y escritorio, creando IAs, Diseños y soluciones únicas para todo tipo de proyecto y adaptas a los clientes.</p>
                                
                                <h3>Misión</h3>
                                <p>Entrar productos de calidad adaptados a los clientes con la mejor tecnología y diseño actual, marcando originalidad dentro del desarrollo.</p>
                                <h3>Visión</h3>
                                <p> Ampliar los horizontes comerciales y ser una empresa con distribuidores de software de renombre.</p>
                                <h3>Valores</h3>
                                <ul>
                                    <li>Confianza: Calidad de trabajo y relaciones productivas.</li>
                                    <li>Transparencia: Decisiones integras con todo el equipo de desarrollo de diferentes culturas que profesan credos.</li>
                                    <li>Responsabilidad: Trabajos responsables y de calidad ofrecida a nuestros clientes.</li>
                                    <li>Pasión: Amamos lo que hacemos y les ponemos nuestro amor.</li>
                                    <li>Disponibilidad al cambio: Aceptar a nuestros aliados y partners a dar un salto de fe y confianza para seguir creciendo.</li>
                                    <li>Amor: Generar empatía, tolerancia y respeto con nuestros productos, generando un sentimiento agradable en nuestros productos para entregar el mejor contenido.</li>
                                </ul>
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

            <script src="homelayout/assets/js/jquery.scrollex.min.js"></script>
            <script src="homelayout/assets/js/jquery.scrolly.min.js"></script>
            <script src="homelayout/assets/js/browser.min.js"></script>
            <script src="homelayout/assets/js/breakpoints.min.js"></script>
            <script src="homelayout/assets/js/util.js"></script>
            <script src="homelayout/assets/js/main.js"></script>

    </body>
</html>