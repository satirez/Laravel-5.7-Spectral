@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Institución</h1>
                </div>

                <div class="card-body">


                     {!! Form::model($session, ['route' => ['sessions.update', $session->id],
                    'method' => 'PUT']) !!}

                        @include('sessions.partials.form')
                        
                    {!! Form::close() !!}


                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection