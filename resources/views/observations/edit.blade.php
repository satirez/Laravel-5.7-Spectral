@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Usuario</h1>
                </div>

                <div class="card-body">



               
                     {!! Form::model($observation, ['route' => ['observations.update', $observation->id],
                    'method' => 'PUT']) !!}

                        @include('observations.partials.form')
                        
                    {!! Form::close() !!}



                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection