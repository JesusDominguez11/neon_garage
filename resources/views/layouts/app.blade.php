<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | tork </title>
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans antialiased">
    @include('layouts.header')
    @include('layouts.nav')
    
    <main>
        @yield('content')
        @include('layouts.footer')
    </main>
    
    <script src="{{ secure_asset('css/main.js') }}"></script>
</body>
</html>