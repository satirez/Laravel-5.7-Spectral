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
                                            <li><a href="{{ route('videochat') }}">VideoChat</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </header>

                <!-- Main -->
                    <article id="main">
                        <header>
                            <h2>Video Llamada [TEST]</h2>
                            <p>Sientete Cerca</p>
                        </header>
                        <section class="wrapper style5">
                            <div class="inner">

                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                                  
                                <p>
                                  Modulo creado para pacientes y/o usuarios que 
                                </p>

                                  <p>
                                    <button class="button fit primary" id="call-btn">Videollamada</button>
                                  </p>

                                  <div id="myembed"></div>

          


            <script>
              var clientId = "demo";

              var tag = document.createElement("script");
              tag.src = "https://www.gruveo.com/embed-api/";
              var firstScriptTag = document.getElementsByTagName("script")[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

              var embed;
              function onGruveoEmbedAPIReady() {
                embed = new Gruveo.Embed("myembed", {
                  width: 480,
                  height: 320,
                  embedParams: {
                    clientid: clientId,
                    color: "63b2de",
                    branding: false
                  }
                });

                embed
                  .on("error", onEmbedError)
                  .on("requestToSignApiAuthToken", onEmbedRequestToSignApiAuthToken)
                  .on("ready", onEmbedReady)
                  .on("stateChange", onEmbedStateChange);
              }

              function onEmbedError(e) {
                console.error("Received error " + e.error + ".");
              }

              function onEmbedRequestToSignApiAuthToken(e) {
                var tokenHmac;
                // ...
                // Compute the HMAC of e.token. Do it server-side only so you don't
                // expose your API secret in the client code!
                // ...
                embed.authorize(tokenHmac);
              }

              function onEmbedReady(e) {
                document.getElementById("call-btn").addEventListener("click", function() {
                  embed.call("Mi.Codigo.aca123", true);
                });
              }

              function onEmbedStateChange(e) {
                if (e.state == "call") {
                  setTimeout(function() {
                    embed.end();
                  }, 10000);
                }
              }
            </script>
       

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
 
            

            <script src="homelayout/assets/js/jquery.scrollex.min.js"></script>
            <script src="homelayout/assets/js/jquery.scrolly.min.js"></script>
            <script src="homelayout/assets/js/browser.min.js"></script>
            <script src="homelayout/assets/js/breakpoints.min.js"></script>
            <script src="homelayout/assets/js/util.js"></script>
            <script src="homelayout/assets/js/main.js"></script>

    </body>
</html>
                              
                                
        











