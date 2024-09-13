<link rel="stylesheet" href="{{asset('css/header.css')}}" media="screen">
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Profissionais</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #131313;
            color: white;
        }
        
        /* Navbar customizada */
        .navbar {
            background-color: #131313; /* Cor escura do background */
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #f1c40f; /* Cor amarela para a logo */
            font-weight: bold;
        }

        .nav-link {
            color: white;
            margin-right: 20px;
            font-size: 1.1rem;
        }

        .nav-link:hover {
            color: #f1c40f; /* Efeito hover amarelo */
        }

        .btn-contact {
            background-color: #f1c40f;
            color: black;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-contact:hover {
            background-color: #d4ac0d;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #131313, #2e2a0a); /* Gradiente */
            padding: 20px;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
        }

        .hero-content img {
            border-radius: 50%;
            background-color: #f18d1c; /* Círculo laranja */
            padding: 20px;
            width: 250px;
            height: 250px;
            object-fit: cover;
        }

        .hero-content h1 {
            font-weight: bold;
            font-size: 2.5rem;
            color: white;
        }

        .highlight-text {
            color: #f1c40f; /* Cor amarela */
        }

        .hero-content p {
            font-size: 1.2rem;
            color: white;
            margin-bottom: 30px;
        }

        .custom-button {
            background-color: #f1c40f;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: black;
            font-weight: bold;
            border-radius: 50px;
        }

        .custom-button:hover {
            background-color: #d4ac0d;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <!-- Logo / Nome da marca -->
            <a class="navbar-brand" href="#">LOGO</a>
            
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
                <a href="#" class="btn btn-contact ms-3">Entre em Contato</a>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <section class="hero-section">
        <div class="hero-content">
            <!-- Imagem circular -->
            <img src="https://via.placeholder.com/250" alt="Profissional">
            
            <!-- Texto principal -->
            <h1>PROFISSIONAIS <span class="highlight-text">EXPERIENTES</span></h1>
            <p>Encontre aqui o profissional certo para o seu serviço. De reformas a elétrica doméstica, saiba como e onde encontrar profissionais qualificados.</p>
            
            <!-- Botão chamativo -->
            <a href="#" class="btn custom-button">Profissionais e Serviços</a>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
