@extends('layouts.app')

@section('content')
    <!-- Hero Section con gradiente sutil -->
    <section class="min-vh-100 d-flex align-items-center" 
             style="background: linear-gradient(135deg, var(--deep-space) 0%, rgba(18,18,32,0.8) 50%, var(--dark-space) 100%)">
        <div class="container text-center py-5">
            <h1 class="display-3 fw-bold mb-4" 
                style="text-shadow: 0 0 15px var(--neon-cyan), 0 0 30px rgba(15, 240, 252, 0.3);">
                NEON<span class="text-magenta">GARAGE</span>
            </h1>
            <p class="lead text-secondary mb-5">Tecnología retro para autos modernos</p>
            
            <!-- Botón con efecto hover sutil -->
            @include('components.neon-btn', [
                'text' => 'Explora Servicios',
                'color' => 'cyan'
            ])
        </div>
    </section>

    <!-- Efecto de "circuitos" decorativos -->
    <div class="position-fixed top-0 left-0 w-100 h-100" 
         style="background: url('data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'><path d='M0 50 Q25 20 50 50 T100 50' stroke='%239461fb' fill='none' opacity='0.05' stroke-width='0.5'/></svg>'); 
                z-index: -1; pointer-events: none;"></div>
@endsection