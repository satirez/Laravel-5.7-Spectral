@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Editar hora</h1>
                </div>

                <div class="card-body">



               
                     {!! Form::model($historialid, ['route' => ['historials.update', $historialid->id],
                    'method' => 'PUT']) !!}
            
                        @include('historials.partials.form')
                        
                    {!! Form::close() !!}



                </div>
             </div>
        </div>
     </div>
 </div>

 @endsection