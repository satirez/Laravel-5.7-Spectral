@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Nueva Fecha de Sesión</h1>
                </div>

                <div class="card-body">
                    
                    @include('historials.partials.error')


                    {{ Form::open(['route' => 'historials.store']) }}

                        @include('historials.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection