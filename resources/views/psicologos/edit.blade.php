@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Psicologo</h1>
                </div>

                <div class="card-body">



               
                     {!! Form::model($user, ['route' => ['psicologos.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('psicologos.partials.form')
                        
                    {!! Form::close() !!}



                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection