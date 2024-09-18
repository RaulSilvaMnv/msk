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
            margin-left: 100px !important;
            width: 600px;
        }
    .card-custom {
    height: 280px;
    width: 300px !important;
    border-radius: 15px;
    padding: 20px;
    color: white;
    /* min-width: 200px; */
    }

    .card-dark {
        background-color: #000;
    }

    .card-yellow {
        background-color: #fdd835;
        color: black;
    }

    .icon {
        font-size: 2rem;
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
        <div class="col-md-6 text-services text-center d-flex flex-column justify-content-center">
            <p class="fs-1 fw-bolder">
                Nosso objetivo é te proporcionar um serviço qualitativo e eficiente  
                para o seu 
                <div class="bg-warning fs-1 rounded-4 fw-bolder yellow-stripe">
                    conforto e satisfação
                </div> 
            </p>
        </div>
    </div>
    <div class="col-12 mt-5 d-flex justify-content-center">
        <div class="container mt-5">
            <div class="row card-row">
                <!-- Card 1 - Preto -->
                <div class="col-3">
                    <div class="card-custom card-dark d-flex flex-column justify-content-between">
                        <div class="icon text-end">
                            ⚡ <!-- Você pode trocar o ícone -->
                        </div>
                        <div>
                            <h3>Elétrica Predial</h3>
                            <p>Saiba sobre como nossos profissionais trabalham para fazer instalações elétricas domésticas.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 - Amarelo -->
                <div class="col-md-3">
                    <div class="card-custom card-yellow d-flex flex-column justify-content-between">
                        <div class="icon text-end">
                            👷 <!-- Você pode trocar o ícone -->
                        </div>
                        <div>
                            <h3>Contrução e Reformas</h3>
                            <p>Trabalho com alvenaria da melhor qualidade está aqui, veja nosso trabalho!</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 - Preto -->
                <div class="col-md-3">
                    <div class="card-custom card-dark d-flex flex-column justify-content-between">
                        <div class="icon text-end">
                            🎨 <!-- Você pode trocar o ícone -->
                        </div>
                        <div>
                            <h3>Pintura Doméstica</h3>
                            <p>Nosso processo de pintura de qualidade e com profissionais detalhistas.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card 4 - Amarelo -->
                <div class="col-md-3">
                    <div class="card-custom card-yellow d-flex flex-column justify-content-between">
                        <div class="icon text-end">
                            🧱 <!-- Você pode trocar o ícone -->
                        </div>
                        <div>
                            <h3>Dry Wall</h3>
                            <p>Trabalho com alvenaria da melhor qualidade está aqui, veja nosso trabalho!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection