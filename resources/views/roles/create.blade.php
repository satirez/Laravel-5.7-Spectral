@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Nuevo Rol</h1>
                </div>

                <div class="card-body">
                    
                    @include('roles.partials.error')


                    {{ Form::open(['route' => 'roles.store']) }}

                        @include('roles.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection