<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Garage | Taller Mecánico Retro</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fuente Retro (ejemplo: Press Start 2P) -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- Estilos Neon -->
    <style>
        :root {
            --neon-pink: #ff6ec7;
            --neon-blue: #00f7ff;
            --neon-purple: #9d00ff;
            --dark-bg: #0a0a1a;
        }
        
        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }
        
        .retro-font {
            font-family: 'Press Start 2P', cursive;
        }
        
        .neon-text {
            text-shadow: 0 0 10px var(--neon-blue), 0 0 20px var(--neon-pink);
            color: white;
        }
        
        .btn-neon {
            background: transparent;
            border: 2px solid var(--neon-pink);
            color: var(--neon-pink);
            transition: all 0.3s;
        }
        
        .btn-neon:hover {
            box-shadow: 0 0 10px var(--neon-pink), 0 0 20px var(--neon-purple);
            color: white;
        }

        /* Animación parpadeante para títulos */
@keyframes flicker {
    0%, 19%, 21%, 23%, 25%, 100% { opacity: 1; }
    20%, 22%, 24% { opacity: 0.5; }
}

.neon-flicker {
    animation: flicker 3s infinite;
}

/* Borde neón */
.border-neon {
    border: 1px solid var(--neon-pink);
    box-shadow: 0 0 10px var(--neon-purple);
}
    </style>
</head>
<body>
    <!-- Navbar Retro -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-neon">
        <div class="container">
            <a class="navbar-brand retro-font neon-text" href="#">NEON GARAGE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 text-center">
        <div class="container py-5">
            <h1 class="retro-font neon-text display-3 mb-4">¡TUNEAMOS TU MÁQUINA!</h1>
            <p class="lead mb-4">El taller mecánico donde lo vintage y lo digital se fusionan.</p>
            <a href="#" class="btn btn-neon btn-lg px-4 me-2">Servicios</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Contacto</a>
        </div>
    </section>

    <!-- Efecto Grid Retro (opcional) -->
    <div class="position-fixed top-0 start-0 w-100 h-100" style="
        background: 
            linear-gradient(rgba(10, 10, 26, 0.8), 
            rgba(10, 10, 26, 0.8)),
            url('https://images.unsplash.com/photo-1533134242443-d4fd215305ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');
        background-size: cover;
        opacity: 0.1;
        z-index: -1;
        pointer-events: none;
    "></div>

    <section class="py-5 bg-dark">
    <div class="container">
        <h2 class="text-center retro-font neon-text mb-5">NUESTROS SERVICIOS</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-black border-neon h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title text-neon">Afinamiento</h3>
                        <p class="card-text">Motores clásicos y modernos.</p>
                    </div>
                </div>
            </div>
            <!-- Repetir para otros servicios -->
        </div>
    </div>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>