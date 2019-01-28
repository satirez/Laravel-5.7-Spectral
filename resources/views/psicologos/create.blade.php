@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Nuevo Psicologos</h1>
                </div>

                <div class="card-body">
                    
                    @include('psicologos.partials.error')


                    {{ Form::open(['route' => 'psicologos.store']) }}

                        @include('psicologos.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection