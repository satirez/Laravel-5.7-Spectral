@extends('layouts.app')

@section('content')
 @include('institutions.partials.error')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Editor de la Institución {{ $institution->name }}</h1>
                </div>

                <div class="card-body">
                    
                     {!! Form::model($institution, ['route' => ['institutions.update', $institution->id],
                    'method' => 'PUT', 'files' => true]) !!}

                        @include('institutions.partials.formedit')
                        
                    {!! Form::close() !!}


                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection