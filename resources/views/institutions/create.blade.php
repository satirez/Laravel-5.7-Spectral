@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">


        <div class="col-md-12">
             @include('institutions.partials.error')
            <div class="card">
                <div class="card-header">
                    <h1>Nueva Institución</h1>
                </div>

                <div class="card-body">
                    
                    


                    {{ Form::open(['route' => 'institutions.store', 'files' => true]) }}

                        @include('institutions.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection
