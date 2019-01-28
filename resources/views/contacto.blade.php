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
                            <h2>Contacto</h2>
                            <p> Contactate con nosotros</p>
                        </header>
                        <section class="wrapper style5">
                            <div class="inner">

                                 
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYG5g2aJ9TjMlbYk7E_VuFYKSvHC1Ee6Y&libraries=places" type="text/javascript">
                                </script>

                                <section>
                                    <h3>Contactate</h3>
                                
                                <form action="">
                                    
                                    <label for="">Nombre/Institución</label>
                                    <input type="text" placeholder="ejemplo">
                                    <label for="">Telefono</label>
                                    <input type="text" placeholder="987654321">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="ejemplo@ejemplo.cl" >
                                    <label for="">Mensaje</label>
                                    <textarea name="" id="" cols="30" rows="6"></textarea placeholder="Mensaje">
                                    <hr>

                                    <input type="submit">
                                </form>
                                </section>

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