@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12>
            <div class="card">
                <div class="card-header">
                    <h1>Editar al director : {{  $user->name }}</h1>
                </div>

                <div class="card-body">



               
                     {!! Form::model($user, ['route' => ['directors.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('directors.partials.formedit')
                        
                    {!! Form::close() !!}



                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection