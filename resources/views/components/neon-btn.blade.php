@props(['color' => 'cyan', 'text' => 'Button'])

@php
    $colors = [
        'cyan' => 'var(--neon-cyan)',
        'magenta' => 'var(--neon-magenta)',
        'purple' => 'var(--neon-purple)'
    ];
@endphp

<button {{ $attributes->merge(['class' => 'btn-neon']) }} 
        style="--neon-color: {{ $colors[$color] ?? $colors['cyan'] }}">
    {{ $text }}
    <span class="btn-neon-glow"></span>
</button>

<style>
    .btn-neon {
        position: relative;
        background: transparent;
        color: white;
        border: 2px solid var(--neon-color);
        padding: 12px 24px;
        font-family: 'Orbitron', sans-serif;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s;
        overflow: hidden;
    }
    
    .btn-neon:hover {
        box-shadow: 0 0 10px var(--neon-color), 
                   0 0 20px rgba(0, 0, 0, 0.5);
        background: rgba(15, 240, 252, 0.05);
    }
    
    .btn-neon-glow {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            var(--neon-color), 
            transparent);
        transition: 0.5s;
    }
    
    .btn-neon:hover .btn-neon-glow {
        left: 100%;
    }
</style>