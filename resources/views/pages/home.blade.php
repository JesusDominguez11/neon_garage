@extends('layouts.app')

@section('title', 'Inicio')

@section('content')



<main>






  <section class="hero-section" id="home">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="titles">
        <h1 class="hero-title cross-bar-glitch" data-slice="20"><span>tork</span></h1>
        <p class="hero-subtitle staggered-rise-in">Taller Mecánico, servicio especializado y garantía certificada</p>
        
        <div class="hero-highlights fade-up">
            <div class="highlight-item">
                <p class="fade-up">Tecnología de diagnóstico avanzada</span>
            </div>
            <div class="highlight-item">
                <p class="fade-up">Reparaciones con garantía escrita</span>
            </div>
            <div class="highlight-item">
                <p class="fade-up">Trabajamos con todas las marcas: Toyota, Chevrolet, Ford, Volkswagen, Nissan y más</span>
            </div>
        </div>

        <div class="hero-btns">
            <a href="#speakers" class="btn btn-ghost btn-through"><span class="fade-up">Nuestros servicios</span></a>
            <a href="#location" class="btn btn-ghost btn-through"><span class="fade-up">Agenda una cita</span> </a>
        </div>
      </div>
    </div>
</section>












<section class="normal-section" id="blank" style="display: none;">

</section>
















  <section class="normal-section" id="speakers">
    <div class="titles">
      <h1 class="cross-bar-glitch" data-slice="20">NUESTROS SERVICIOS</h1>
      <h2 class="staggered-rise-in">Todos los servicios que ofrecemos</h2>
    </div>
    <div class="speakers-cards">

        <!-- Servicio 1 - Mecánica Especializada -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/engine.png" class="avatar" alt="Motor"/>
        <div class="username">Mecánica especializada</div>
        <div class="info">
            <ul>
                <li><strong>Reconstrucción completa</strong> de motores</li>
                <li>Cambio de <strong>aceite sintético</strong> y filtros</li>
                <li>Reparación de <strong>transmisiones</strong></li>
                <li>Ajuste de <strong>bandas y cadenas</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 2-6 horas</span>
                <span class="warranty">🛡 6 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio 5 - Carrocería y Pintura -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/bodywork.png" class="avatar" alt="Carrocería"/>
        <div class="username">Carrocería y pintura</div>
        <div class="info">
            <ul>
                <li><strong>Enderezado</strong> de chasis</li>
                <li>Pintura <strong>robotizada</strong> e igualación</li>
                <li>Reparación de <strong>fibra de carbono</strong></li>
                <li>Tratamiento <strong>anticorrosivo</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 1-5 días</span>
                <span class="warranty">🛡 1 año garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio 6 - Sistema Eléctrico -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/electric.png" class="avatar" alt="Eléctrico"/>
        <div class="username">Electricidad Automotriz</div>
        <div class="info">
            <ul>
                <li>Diagnóstico <strong>computarizado</strong></li>
                <li>Reparación de <strong>alternadores</strong></li>
                <li>Upgrade <strong>sistema de iluminación</strong></li>
                <li>Instalación <strong>accesorios</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 1-3 horas</span>
                <span class="warranty">🛡 4 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio 3 - Sistema de Frenos -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/brakes.png" class="avatar" alt="Frenos"/>
        <div class="username">Frenos</div>
        <div class="info">
            <ul>
                <li>Cambio de <strong>pastillas y discos</strong></li>
                <li>Rectificado de <strong>discos</strong></li>
                <li>Reparación <strong>sistema ABS</strong></li>
                <li>Líquido de frenos <strong>premium</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 1-2 horas</span>
                <span class="warranty">🛡 8 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio 7 - Aire Acondicionado -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/ac.png" class="avatar" alt="Aire Acondicionado"/>
        <div class="username">Climatización</div>
        <div class="info">
            <ul>
                <li>Recarga de <strong>gas R134a</strong></li>
                <li>Limpieza <strong>antibacterial</strong></li>
                <li>Reparación de <strong>compresores</strong></li>
                <li>Sistema <strong>dual zone</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 1.5 horas</span>
                <span class="warranty">🛡 6 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio 4 - Diagnóstico Computarizado -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/diagnostic.png" class="avatar" alt="Diagnóstico"/>
        <div class="username">Diagnóstico avanzado</div>
        <div class="info">
            <ul>
                <li>Escaneo <strong>OBD2</strong> completo</li>
                <li>Análisis <strong>gráfico</strong> de parámetros</li>
                <li>Pruebas <strong>actuadores</strong></li>
                <li>Reporte <strong>técnico detallado</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 30-45 min</span>
                <span class="warranty">🛡 Diagnóstico preciso</span>
            </div>
        </div>
    </div>
</div>

        <!-- Servicio de Afinación (Completo) -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/tune-up.png" class="avatar" alt="Afinación"/>
        <div class="username">Afinación</div>
        <div class="info">
            <ul>
                <li><strong>Cambio de bujías</strong> y cables</li>
                <li>Ajuste de <strong>válvulas</strong> y sincronización</li>
                <li>Limpieza de <strong>inyectores</strong></li>
                <li>Revisión <strong>sistema de combustible</strong></li>
                <li>Optimización <strong>rendimiento</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 2-3 horas</span>
                <span class="warranty">🛡 3 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Servicio de Alineamiento (Profesional) -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/alignment.png" class="avatar" alt="Alineamiento"/>
        <div class="username">Alineamiento 4D</div>
        <div class="info">
            <ul>
                <li>Alineación <strong>computarizada</strong> de precisión</li>
                <li>Ajuste <strong>ángulos de caída</strong>, caster y convergencia</li>
                <li>Balanceo <strong>dinámico</strong> de ruedas</li>
                <li>Diagnóstico <strong>suspensión</strong></li>
                <li>Corrección <strong>desgaste irregular</strong> de llantas</li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 1.5 horas</span>
                <span class="warranty">🛡 6 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Reconstrucción de Motor (Completa) -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/engine-rebuild.png" class="avatar" alt="Reconstrucción motor"/>
        <div class="username">Reconstrucción de motor</div>
        <div class="info">
            <ul>
                <li><strong>Desarme completo</strong> e inspección</li>
                <li>Rectificación de <strong>bloque y culata</strong></li>
                <li>Cambio de <strong>anillos, cojinetes, sellos</strong></li>
                <li>Pruebas de <strong>compresión</strong> post-reparación</li>
                <li>Puesta a punto <strong>certificada</strong></li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ 3-5 días</span>
                <span class="warranty">🛡 12 meses garantía</span>
            </div>
        </div>
    </div>
</div>

<!-- Reparaciones Generales (Especializadas) -->
<div class="card">
    <div class="card-borders">
        <div class="border-top"></div>
        <div class="border-right"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
    </div>
    <div class="card-content">
        <img src="img/services/repairs.png" class="avatar" alt="Reparaciones"/>
        <div class="username">Reparaciones expertas</div>
        <div class="info">
            <ul>
                <li><strong>Diagnóstico preciso</strong> con scanner</li>
                <li>Reparación <strong>sistema eléctrico</strong></li>
                <li>Solución <strong>problemas mecánicos</strong> complejos</li>
                <li>Reparación <strong>transmisiones</strong> automáticas/manuales</li>
                <li><strong>Solución inmediata</strong> para averías</li>
            </ul>
            <div class="service-meta">
                <span class="duration">⏱ Varía según problema</span>
                <span class="warranty">🛡 6 meses garantía</span>
            </div>
        </div>
    </div>
</div>










    </div>
  </section>



















  <section class="normal-section" id="schedules">

    

<div class="titles">
        <h1 class="cross-bar-glitch" data-slice="20">SOBRE NOSOTROS</h1>
        <h2 class="staggered-rise-in">Nuestra Historia</h2>
    </div>
    
    <div class="description">
        <p class="fade-up">
            En <strong>tork</strong> llevamos más de 15 años siendo referentes en reparación 
            automotriz especializada. Lo que comenzó como un pequeño taller familiar hoy es un centro 
            certificado con tecnología de vanguardia.
        </p>
        
        <p class="fade-up">
            Nuestro equipo está formado por <strong>mecánicos certificados</strong> con especializaciones en motores, 
            sistemas eléctricos y gestión computarizada. Cada miembro recibe más de 200 horas anuales 
            de capacitación en las últimas tecnologías automotrices.
        </p>
        
        <div class="about-features">
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3 class="fade-up">Misión</h3>
                <p class="fade-up">Proporcionar reparaciones precisas con transparencia absoluta y garantías reales.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✚</div>
                <h3 class="fade-up">Visión</h3>
                <p class="fade-up">Convertirnos en el taller de referencia para vehículos de alta gama en la región.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">♥</div>
                <h3 class="fade-up">Valores</h3>
                <p class="fade-up">Honestidad técnica • Excelencia certificada • Atención personalizada</p>
            </div>
        </div>
        
        <p class="fade-up">
            Contamos con <strong>certificaciones oficiales</strong> de las principales marcas automotrices y 
            utilizamos sólo repuestos originales o de calidad equivalente. 
        </p>

        <p class="fade-up">Nuestro compromiso: <em>"Si no podemos repararlo correctamente, no lo hacemos"</em>.</p>
    </div>








    <div class="titles">
      <h1 class="cross-bar-glitch" data-slice="20">NUESTRA HISTORIA</h1>
      <h2 class="staggered-rise-in">Acerca de nuestro crecimiento ofreciendo nuestros servicios</h2>
    </div>
    <ul class="timeline">
      <li class="timeline__line"></li>
      <li class="timeline__item start">
        <div class="info">
          <div class="dot"></div>
          <time class="time">2024</time>
          <h4 class="title">Titulo de la fecha</h4>
        </div>
      </li>
      <li class="timeline__item">
        <div class="info">
          <div class="dot"></div>
          <time class="time">2016</time>
          <h4 class="speaker"></h4>
          <h4 class="title">Titulo de la fecha</h4>
        </div>
        <div class="content">
          Descripcion sobre la fecha
        </div>
      </li>
      <li class="timeline__item">
        <div class="info">
          <div class="dot"></div>
          <time class="time">2012</time>
          <h4 class="speaker"></h4>
          <h4 class="title">Titulo de la fecha</h4>
        </div>
        <div class="content">
          Descripcion sobre la fecha
        </div>
      </li>
      <li class="timeline__item break">
        <div class="info">
          <div class="dot"></div>
          <time class="time">2010</time>
          <h4 class="title">Titulo de la fecha</h4>
        </div>
      </li>

      <li class="timeline__item end">
        <div class="info">
          <div class="dot"></div>
          <time class="time">2005</time>
          <h4 class="title">Titulo de la fecha</h4>
        </div>
      </li>
    </ul>





  </section>
















  



  <section class="normal-section" id="location">
    <div class="titles">
      <h1 class="cross-bar-glitch" data-slice="20">CONTACTO</h1>
      <h2 class="staggered-rise-in">Contactanos y conoce nuestra sucursal</h2>
    </div>
    <div class="place">
      <div class="marker fade-in">
        <div class="pin"></div>
        <div class="shadow"></div>
      </div>
      <div class="place-name cross-bar-glitch" data-slice="20">
        Sucursal en Tijuana
      </div>
    </div>
    <div id="map" class="fade-in"></div>
  </section>

















  <section class="normal-section" id="sponsors">
    <div class="titles">
      <h1 class="cross-bar-glitch" data-slice="20">MARCAS</h1>
      <h2 class="staggered-rise-in">Conoce las marcas de productos con las que prestamos nuestros servicios</h2>
    </div>
    <ul class="sponsors-list">
      <li class="fade-up">
        <a href="http://www.ucloud.cn" target="_blank">
          <img src="https://img.w3ctech.com/ucloud-400.png" alt="Ucloud" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://www.broadview.com.cn/" target="_blank">
          <img src="https://img.w3ctech.com/bowen.png" alt="博文视点" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://www.ituring.com.cn/" target="_blank">
          <img src="https://img.w3ctech.com/turing-logo.png" alt="图灵教育" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://www.epubit.com.cn/" target="_blank">
          <img src="https://img.w3ctech.com/yibuclub.png" alt="异步社区" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://www.w3cplus.com/" target="_blank">
          <img src="https://img.w3ctech.com/w3c-plus-400.png" alt="w3cplus" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href=" https://zdk.f2er.net/" target="_blank">
          <img src="https://img.w3ctech.com/zdk_400.png" alt="前端de早读课" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://gold.xitu.io/" target="_blank">
          <img src="https://img.w3ctech.com/juejin-logo.png" alt="稀土掘金" />
        </a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="http://qianduan.guru/" target="_blank"
          ><img
            src="https://img.w3ctech.com/frontendmagezine.png"
            alt="前端外刊评论"
        /></a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="https://www.oschina.net/" target="_blank"
          ><img src="https://img.w3ctech.com/oschina.png" alt="开源中国"
        /></a>
        <div>marca</div>
      </li>
      <li class="fade-up">
        <a href="https://www.uisdc.com/" target="_blank"
          ><img src="https://img.w3ctech.com/uisdc.png" alt="优设"
        /></a>
        <div>marca</div>
      </li>
    </ul>
  </section>


  
</main>



@endsection