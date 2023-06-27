@extends('layouts.app')  
@section('contents')
                <div class="side-app">
                    <div class="container-fluid main-container">                    
                        <!--Row -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                           Registrar Proyecto
                                        </div>
                                    </div>
                                    <div class="card-body">                                            
                                            Se ha registrado el Proyecto <?= $datos[0]; ?>

                                            Titulo :   <?= $datos[1]; ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Row-->                       

                    </div>                  
                </div>  
@endsection
