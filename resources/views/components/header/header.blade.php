<link rel="stylesheet" href="{{asset('css/header.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}" media="screen">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex justify-content-center">
    <div class="container-fluid">
        <!-- Logo / Nome da marca -->
        <a class="navbar-brand" href="#">
            <img class="logo" src="{{asset('images/msk Logo.png')}}" alt="">
        </a>
        
        <!-- Botão responsivo para telas menores -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links de navegação -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nossos Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>

            <!-- Botão 'Entre em Contato' -->
            <a href="#" class="btn btn-contact ms-3">Entre em Contato <i class="fs-4 ms-2 fa fa-whatsapp"></i></a>
        </div>
    </div>
</nav>

<!-- Seção Hero -->
<section class="hero-section">
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Coluna da Imagem -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="img-wrapper">
                    <img src="{{ asset('images/men crossing arms.png') }}" alt="Profissional" class="professional-img img-fluid">
                </div>
            </div>
    
            <!-- Coluna do Texto -->
            <div class="col-md-6 col-12 text-column">
                <h1>PROFISSIONAIS <span class="highlight-text">EXPERIENTES</span></h1>
                <p>Encontre aqui o profissional certo para o seu serviço. De reformas a elétrica doméstica, saiba como e onde encontrar profissionais qualificados.</p>
                <a href="#" class="btn custom-button">Profissionais e Serviços</a>
            </div>
        </div>
    </div>
    
    </div>
</section>

<div class="scroll-to-top">
    <i class="bi bi-chevron-down"></i>
</div>

<div class="d-flex align-items-center flex-column mb-5">
    <h5 class="text-uppercase pt-4 mb-5">marcas </h5>
    <div class="d-flex pb-3 flex-wrap justify-content-center">
        <h2 class="text-uppercase pt-2 mx-5">Politintas</h2>
        <h2 class="text-uppercase pt-2 mx-5">Suvinil</h2>
        <h2 class="text-uppercase pt-2 mx-5">Eletromil</h2>
        <h2 class="text-uppercase pt-2 mx-5">Casa do Construtor</h2>
        <h2 class="text-uppercase pt-2 mx-5">Atlas</h2>
    </div>
</div>

<!-- Custom CSS for Navbar -->
<style>
    /* Para dispositivos pequenos e mobile: fundo branco no dropdown */
    @media (max-width: 992px) {
        .navbar-dark .navbar-toggler-icon {
            background-color: black;
        }
        .navbar-collapse {
            background-color: white;
        }
        .navbar-nav .nav-link {
            color: black;
        }
        .btn-contact {
            background-color: black;
            color: white;
        }
        .btn-contact:hover {
            background-color: #333;
            color: white;
        }
    }

    /* Imagem no hero */
    .professional-img {
        max-width: 100%;
        height: auto;
    }

    /* Customização dos textos da seção de marcas */
    .text-uppercase {
        font-size: 1.2rem;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
     const navbar = document.querySelector('.navbar');

     window.addEventListener('scroll', function() {
         if (window.scrollY > 50) { // Quando a rolagem vertical for maior que 50px
             navbar.classList.add('scrolled');
         } else {
             navbar.classList.remove('scrolled');
         }
     });
 }); 
 </script>