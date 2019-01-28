@extends('layouts.apppaciente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Bienvenido {{ auth()->user()->name }}</h3>
                    <h6> Instituto: <br>{{ auth()->user()->lugar->name }}</h6>



                </div>
                
                <div class="card-body">
                    
                                

                        
                        <h4 class="text-center">Opciones</h4>
                        <div class="text-center">
                            
                               
                            <a class="btn btn-raised btn-primary btn-sm" href=""> Actividades Pendientes 
                            </a>
                          
                            <hr>
                                
                            <a class="btn btn-raised btn-danger" href=""> Expresar algo </a>
                            <a class="btn btn-raised btn-info" href=""> Contar algo </a>
                          
                        </div>
                       
                        
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
