@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Usuarios</h1>
                </div>

                <div class="card-body">
                    
                    @include('users.partials.error')


                    {{ Form::open(['route' => 'users.store']) }}

                        @include('users.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection