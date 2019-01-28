@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Nueva Observacion</h1>
                </div>

                <div class="card-body">
                    
                    @include('observations.partials.error')


                    {{ Form::open(['route' => 'observations.store']) }}

                        @include('observations.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection