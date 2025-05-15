<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <!-- Logo con efecto neón -->
        <a class="navbar-brand orbitron-bold neon-cyan" href="{{ url('/') }}">
            <span style="color: var(--neon-magenta)">NEON</span>GARAGE
        </a>

        <!-- Menú hamburguesa (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Items de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto orbitron-medium">
                <li class="nav-item mx-3">
                    <a class="nav-link hover-cyan" href="{{ url('/') }}">INICIO</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link hover-magenta" href="#">SERVICIOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link hover-purple" href="#">GALERÍA</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link hover-cyan" href="#">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background: rgba(10, 10, 18, 0.7) !important;
        backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--neon-purple);
    }

    .orbitron-bold {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .orbitron-medium {
        font-family: 'Orbitron', sans-serif;
        font-weight: 500;
    }

    .nav-link {
        position: relative;
        color: var(--text-secondary) !important;
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    .hover-cyan:hover {
        color: var(--neon-cyan) !important;
        text-shadow: 0 0 10px var(--neon-cyan);
    }

    .hover-magenta:hover {
        color: var(--neon-magenta) !important;
        text-shadow: 0 0 10px var(--neon-magenta);
    }
</style>