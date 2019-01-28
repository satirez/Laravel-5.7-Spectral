@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Nuevo Paciente</h1>
                </div>

                <div class="card-body">
                    
                    @include('patients.partials.error')


                    {{ Form::open(['route' => 'patients.store']) }}

                        @include('patients.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection