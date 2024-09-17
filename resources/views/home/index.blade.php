@extends('layouts.front')

@section('body')
    <style>
        .section-main{
            margin-top: 150px;
        }   
        
        hr{
            border: 1px solid black;
            opacity: 100;
        }
        .text-services {
            text-align: center; /* Centraliza o texto horizontalmente */
            font-family: 'Inter', sans-serif; /* Define a fonte como Inter */
           
        }
        .yellow-stripe{
            margin-right: 100px !important;
            width: 600px;
        }
    </style>
    
    <div class="col-12 section-main d-flex justify-content-center">
        <div class="col-4 mt-3">
            <hr class="border-2">
        </div>
        <div class="col-3 mx-4 d-flex justify-content-center bg-black">
            <h1 class="text-warning"> Nossos Serviços</h1>
        </div>
        <div class="col-4 mt-3">
            <hr class="border-2">
        </div>
    </div>
    <div class="col-12 mt-5 d-flex justify-content-center">
        <div class="col-md-6 text-services">
            <p class="fs-1 fw-bolder">
                Nosso objetivo é te proporcionar um serviço qualitativo e eficiente  
                para o seu  
            </p>
            <div class="bg-warning fs-1 fw-bolder rounded-4 yellow-stripe ms-5">conforto e satisfação</div>
            
        </div>
    </div>
@endsection