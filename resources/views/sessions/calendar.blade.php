@extends('layouts.app')

@section('content')

<div class="container">
@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
   <div class="panel panel-default">
         <div class="panel-heading">
             <h2>Calendario de Sesiones</h2>
                @can('sessions.create')
                        <a href="{{route('sessions.create')}}" class="btn btn-primary btn-md"> <i class="fas fa-user-plus"> </i></a>
                    @endcan
         </div>
         <div class="panel-body" >
            {!! $calendar->calendar() !!}
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


{!! $calendar->script() !!}


@endsection

