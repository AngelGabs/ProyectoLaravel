<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud - Hospital</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        /* Estilo general de fondo */
        body {
            background-color: #f1f9f9;
            font-family: 'Arial', sans-serif;
        }

        /* Carrusel de la página de inicio */
        .carousel-item img {
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }

        /* Fondo específico para la página de inicio */
        .hospital-background {
            background: linear-gradient(to right, #aad4f5, #80c7e2);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .hospital-title {
            font-size: 36px;
            color: #004f68;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Tarjetas decorativas */
        .hospital-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            margin: 20px 0;
        }

        .hospital-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .hospital-card h5 {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }

        .hospital-card p {
            font-size: 14px;
            color: #777;
        }

        /* Estilo para el botón de registro */
        .btn-register {
            background-color: #0066cc;
            color: white;
            font-size: 18px;
            padding: 12px 25px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-register:hover {
            background-color: #005bb5;
            cursor: pointer;
        }

        /* Estilo para el botón de emergencia */
        .btn-emergency {
            background-color: #ff3333;
            color: white;
            font-size: 20px;
            padding: 12px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            margin-top: 20px;
            display: block;
            width: 100%;
        }

        .btn-emergency:hover {
            background-color: #cc0000;
            cursor: pointer;
        }

        /* Estilos para el área de noticias */
        .news-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .news-title {
            font-size: 24px;
            font-weight: bold;
            color: #004f68;
            text-align: center;
            margin-bottom: 20px;
        }

        .news-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .news-item:last-child {
            border-bottom: none;
        }

        .news-item h5 {
            font-size: 18px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    @include('fragments/navbar')

    <!-- Carrusel solo en la página de inicio -->
    @if (Route::is('index'))
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://m.media-amazon.com/images/M/MV5BMTY1NDQ5NDA1MF5BMl5BanBnXkFtZTcwMzI4OTcxNA@@._V1_.jpg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="https://static.vecteezy.com/system/resources/previews/046/249/440/large_2x/in-hospital-room-free-photo.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/N237VRQ73BGENORPROAJUMNV7E.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Sección de información hospitalaria -->
    <div class="hospital-background">
        <h2 class="hospital-title">Bienvenido a Nuestra Unidad de Salud</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="hospital-card">
                        <img src="https://i.ytimg.com/vi/xas1UyTiVUw/maxresdefault.jpg" alt="Urgencias">
                        <h5>Urgencias</h5>
                        <p>Atención inmediata para casos urgentes las 24 horas del día.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hospital-card">
                        <img src="https://i.ytimg.com/vi/Wtz4SKSgzlA/maxresdefault.jpg" alt="Servicios Médicos">
                        <h5>Servicios Médicos</h5>
                        <p>Consulta médica general, estudios y diagnóstico confiable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hospital-card">
                        <img src="https://media.zenfs.com/en/purewow_185/a2af3081b2a280c6e5a30290fb58e5b3" alt="Sala de Espera">
                        <h5>Sala de Espera</h5>
                        <p>Área cómoda y tranquila para nuestros pacientes mientras esperan su consulta.</p>
                    </div>
                </div>
            </div>

            <!-- Botón de registro -->
            <div class="text-center">
                <a href="{{ route('citas.create') }}" class="btn-register">Regístrate Ahora</a>
            </div>

            <!-- Botón de emergencia -->
            <div class="text-center mt-3">
                <a href="{{ route('medicos.create') }}" class="btn-emergency">Emergencias</a>
            </div>
        </div>
    </div>

    <!-- Sección de noticias -->
    <div class="news-section">
        <h2 class="news-title">Últimas Noticias de Salud</h2>
        <div class="news-item">
            <h5>Nuevo tratamiento para la diabetes tipo 2</h5>
            <p>Descubre cómo un nuevo tratamiento puede cambiar la vida de los pacientes con diabetes.</p>
        </div>
        <div class="news-item">
            <h5>Recomendaciones para evitar el COVID-19</h5>
            <p>Consejos importantes para mantenerte a salvo y proteger a tu familia.</p>
        </div>
    </div>

    @endif

    <!-- Contenido principal -->
    @if (session('status'))
        {{ session('status') }}        
    @endif

    @yield('content')

    <!-- Incluye Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
