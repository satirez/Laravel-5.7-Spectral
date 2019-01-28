@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Crear Sesion/Ficha</h1>
                </div>

                <div class="card-body">
                    
                    @include('sessions.partials.error')


                    {{ Form::open(['route' => 'sessions.store']) }}

                        @include('sessions.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection