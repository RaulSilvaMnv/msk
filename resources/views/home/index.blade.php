@extends('layouts.front')

@section('body')
    <style>
.section-main {
    margin-top: 150px;
}

hr {
    border: 1px solid black;
    opacity: 100;
    width: 100%;
}

.text-services {
    text-align: center;
    font-family: 'Inter', sans-serif;
}

.yellow-stripe {
    margin: 0 auto;
    max-width: 463px;
    width: 100%;
    padding: 10px;
    font-size: 1.5rem;
    border-radius: 10px;
    text-align: center;
}

.card-custom {
    height: 280px;
    width: 100%;
    max-width: 300px;
    border-radius: 15px;
    padding: 20px;
    color: white;
    margin: 0 auto;
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

@media (max-width: 768px) {
    .yellow-stripe {
        font-size: 1.25rem;
        width: 100%;
    }

    .card-custom {
        height: auto;
        width: 90%;
    }
}

@media (max-width: 992px) {
    .section-main hr {
        display: none;
    }
}

    </style>
    
    <div class="col-12 section-main d-flex justify-content-center">
        <!-- Linhas horizontais que desaparecem em dispositivos pequenos -->
        <div class="col-lg-4 d-none d-lg-block mt-3">
            <hr class="border-2">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-8 mx-4 d-flex justify-content-center bg-black">
            <h1 class="text-warning text-center"> Nossos Serviços</h1>
        </div>
        <div class="col-lg-4 d-none d-lg-block mt-3">
            <hr class="border-2">
        </div>
    </div>
    
    
    <div class="col-12 mt-5 d-flex justify-content-center">
        <div class="col-md-8 col-sm-10 col-12 text-services text-center d-flex flex-column justify-content-center">
            <p class="fs-3 fw-bolder">
                Nosso objetivo é te proporcionar um serviço qualitativo e eficiente  
                para o seu 
                <div class="bg-warning fs-4 rounded-4 fw-bolder yellow-stripe w-100 text-center">
                    conforto e satisfação
                </div> 
            </p>
        </div>
    </div>
    
    
    <div class="col-12 mt-5 d-flex justify-content-center">
        <div class="container mt-5">
            <div class="row card-row">
                <!-- Card 1 - Preto -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
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