<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
 

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img src="{{ url('spectrallogo.png') }}" width="180px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav nav-pills nav-fill mr-auto ">

                         @can('roles.index')
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('roles.index')}}">Roles</a>
                        </li>
                        @endcan
                        

                        @can('institutions.index')
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('institutions.index')}}">Instituciones</a>
                        </li>
                        @endcan
  
                        
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Usuarios
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @can('users.index')
                                <a class="dropdown-item" href="{{ route('users.index')}}">Todos los Usuarios</a>
                                <div class="dropdown-divider"></div>
                             @endcan
                          @can('directors.index')
                               <a class="dropdown-item" href="{{ route('directors.index')}}">Directores</a>
                             @endcan

                             @can('secretarys.index')
                               <a class="dropdown-item" href="{{ route('secretarys.index')}}">Secretarias</a>
                             @endcan

                            @can('psicologos.index')
                               <a class="dropdown-item" href="{{ route('psicologos.index')}}">Psicologos</a>
                            @endcan

                            @can('patients.index')
                               <a class="dropdown-item" href="{{ route('patients.index')}}">Pacientes</a>
                            @endcan 
                        </div>
                    </li>



                        @can('sessions.index')
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('sessions.index')}}">Sesiones</a>
                        </li>
                        @endcan

                        @can('sessions.calendar')
                         <li>
                            <a class="nav-link" href="{{ route('sessions.calendar')}}">Calendario</a>
                         </li>
                        @endcan

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Reportes
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                          @can('reports.general.index')
                                <a class="dropdown-item" href="{{ route('reports.general')}}">Generales</a>
                                <div class="dropdown-divider"></div>
                          @endcan

                         @can('reports.specific')
                                <a class="dropdown-item" href="{{ route('reports.especifico')}}">Institucionales</a>
                          @endcan

                        </div>
                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ url('/') }}">
                                        <i class="fas fa-home"> {{ __('Inicio') }} </i>   
                                    </a>

                                    <a class="dropdown-item" href="{{ route('users.showprofile', auth()->user()->id) }}">
                                        <i class="fas fa-user-circle"> {{ __('Perfil de Usuario') }} </i>
                                    </a>

                                    <a class="dropdown-item" href="{{ route('institutions.show', auth()->user()->institute_id) }}">
                                        <i class="fas fa-hospital-alt"> {{ __('Mi Institución') }} </i>
                                    </a>
                                        
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"> {{ __('Salir') }} </i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         
      @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif


        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Bootstrap core JavaScript
================================================== -->

<script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous">
</script>

<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous">
</script>

<script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous">
</script>

  <!-- Calendar
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/es.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  


  <!-- Scripts -->
    

</body>
</html>
