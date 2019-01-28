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
                        <h1><a href="{{ url('/') }}">Spectral</a></h1>
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

                <!-- Banner -->
                    <section id="banner">
                        <div class="inner">
                            <h2>Spectral</h2>
                            <p>Gestionar la vida<br />
                            Es gestionarlo todo </p>
                            <ul class="actions special">
                                <li><a href="{{ route('contacto') }}" class="button primary">Contactanos</a></li>
                            </ul>
                        </div>
                        <a href="#one" class="more scrolly">Informate más</a>
                    </section>

                <!-- One -->
                    <section id="one" class="wrapper style1 special">
                        <div class="inner">
                            <header class="major">
                                <h2>Crea, Gestiona, Ten el control<br /> </h2>
                                <p>Gestiona Horarios, tareas y ve graficos de avances de los usuarios<br />
                                Que tambien los usuarios sean parte de algo más que un tratamiento a 4 paredes</p>
                            </header>
                            <ul class="icons major">
                                <li><span class="icon fas fa-mobile major style1"><span class="label">Lorem</span></span></li>
                                <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                                <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
                            </ul>
                        </div>
                    </section>

                <!-- Two -->
                    <section id="two" class="wrapper alt style2">
                        <section class="spotlight">
                            <div class="image"><img src="homelayout/images/pic01.jpg" alt="" /></div><div class="content">
                                <h2>Gestiona el personal psicologico </h2>
                                <p>Spectral es un sistema de gestión para psicologos donde podran crear horarios y sesiones dedicadas a los clientes, automatizando los procesos de agendas</p>
                            </div>
                        </section>
                        <section class="spotlight">
                            <div class="image"><img src="homelayout/images/pic02.jpg" alt="" /></div><div class="content">
                                <h2> Soporte Responsivo<br /> </h2>
                                <p> Pensamos en nuestros clientes y en sus requerimientos, por ello un sistema donde cualquier pantalla y dispositivo pueda estar perfectamente alineado es fundamental</p>
                            </div>
                        </section>
                        <section class="spotlight">
                            <div class="image"><img src="homelayout/images/pic03.png" alt="" /></div><div class="content">
                                <h2>Aplicación Movil para interación de pacientes </h2>
                                <p>Que el paciente no se quede simplemente en las sesiones, que interactue con nuestro personal dia a dia!</p>
                            </div>
                        </section>
                        <section class="spotlight">
                            <div class="image"><img src="homelayout/images/map.png" alt="" /></div><div class="content">
                                <h2>Encuentranos cerca de ti! <br> UNA RED DE INSTITUTOS</h2>
                                <p>Puedes buscar cada instituto que confia en nosotros cerca de acá y crear una red más amplia, buscanos
                                <a href="{{ route('places') }}">acá</a>
                                </p>
                            </div>
                        </section>
                    </section>

                    

                <!-- Three -->
                    <section id="three" class="wrapper style4 special">
                        <div class="inner">
                            <header class="major">
                                <h2>Caracteristicas de nuestro producto</h2>
                                <p>Spectral cuenta con carasteristicas que debes tener en cuenta.</p>
                            </header>
                            <ul class="features">
                                <li class="icon fa-paper-plane-o">
                                    <h3>Seguridad</h3>
                                    <p>Nos preocupamos que la información de los pacientes sea condidencial y tus sensiones de la misma forma</p>
                                </li>
                                <li class="icon fa-laptop">
                                    <h3>Disponibilidad</h3>
                                    <p>Información al alcance de tu mano, toda y en un solo lugar</p>
                                </li>
                                <li class="icon fa-code">
                                    <h3>Integridad</h3>
                                    <p>Modulos, graficos y analisis que importan al momento de generar la herramienta</p>
                                </li>
                                <li class="icon fa-headphones">
                                    <h3>Confidencialidad</h3>
                                    <p>Sistema de roles personalizados para la creación y administración del personal</p>
                                </li>
                                <li class="icon fa-heart-o">
                                    <h3> Estadisticas </h3>
                                    <p> Sistema de estadisticas dedicado a reforzar la toma de decisiones</p>
                                </li>
                                <li class="icon fa-flag-o">
                                    <h3> Avances </h3>
                                    <p>Sigue el paso de tus pacientes, de tu consulta de tu lugar.</p>
                                </li>
                            </ul>
                        </div>
                    </section>

                <!-- CTA -->
                    <section id="cta" class="wrapper style4">
                        <div class="inner">
                            <header>
                                <h2>Habla con nosotros!!</h2>
                            </header>
                            <ul class="actions stacked">
                                <li><a href="{{ route('contacto') }}" class="button fit primary">Contactanos</a></li>
                            </ul>
                        </div>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <h5> Buscanos en nuestras redes sociales</h5>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                        <ul class="copyright">
                            <li>&copy; Spectral</li><li>Creado por: <a href="">Middlesoft</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="homelayout/assets/js/jquery.min.js"></script>
            <script src="homelayout/assets/js/jquery.scrollex.min.js"></script>
            <script src="homelayout/assets/js/jquery.scrolly.min.js"></script>
            <script src="homelayout/assets/js/browser.min.js"></script>
            <script src="homelayout/assets/js/breakpoints.min.js"></script>
            <script src="homelayout/assets/js/util.js"></script>
            <script src="homelayout/assets/js/main.js"></script>

    </body>
</html>