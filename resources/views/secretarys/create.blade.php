@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Nueva Secretaria</h1>
                </div>

                <div class="card-body">
                    
                    @include('secretarys.partials.error')


                    {{ Form::open(['route' => 'secretarys.store']) }}

                        @include('secretarys.partials.form')
                        
                    {{ Form::close() }}


                </div>
             </div>
        </div>

     </div>
 </div>

 @endsection