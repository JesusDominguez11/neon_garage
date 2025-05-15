<!-- En resources/views/layouts/partials/head.blade.php -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Neon Garage' }}</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Fuente Orbitron -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Tus estilos -->
<link href="{{ asset('css/neon.css') }}" rel="stylesheet">  <!-- ¡Cambio clave! -->