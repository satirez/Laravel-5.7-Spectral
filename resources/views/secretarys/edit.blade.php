@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Secretaria</h1>
                </div>

                <div class="card-body">



               
                     {!! Form::model($user, ['route' => ['secretarys.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('secretarys.partials.form')
                        
                    {!! Form::close() !!}



                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection