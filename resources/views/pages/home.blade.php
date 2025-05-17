@extends('layouts.app')

@section('title', 'Inicio')

@section('content')










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

{{-- <section class="about-section">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="/videos/adpp_2.mp4" type="video/mp4" />
    Tu navegador no soporta videos HTML5.
  </video>

  <div class="about-content">
    <h1>Bienvenido a Neon Garage</h1>
    <p>Tu taller con estilo retro y moderno</p>
  </div>
</section> --}}
































  <section class="normal-section" id="speakers">
<script>
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.card-content');

  cards.forEach(card => {
    const imgUrl = card.getAttribute('data-img');

    // Inicializa la variable CSS para que siempre exista el background-image
    card.style.setProperty('--bg-img-url', `url('${imgUrl}')`);

    card.addEventListener('mouseenter', () => {
      card.classList.add('hovered');
    });

    card.addEventListener('mouseleave', () => {
      card.classList.remove('hovered');
    });
  });
});

</script>

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
    <div class="card-content" data-img="/img/speciality.jpeg">
        {{-- <img src="img/services/engine.png" class="avatar" alt="Motor"/> --}}
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
    <div class="card-content" data-img="/img/painting.jpeg">
        {{-- <img src="img/services/bodywork.png" class="avatar" alt="Carrocería"/> --}}
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
    <div class="card-content" data-img="/img/lightning.jpeg">
        {{-- <img src="img/services/electric.png" class="avatar" alt="Eléctrico"/> --}}
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
    <div class="card-content" data-img="/img/brakes.jpeg">
        {{-- <img src="img/brakes.jpeg" class="avatar" alt="Frenos"/> --}}
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
    <div class="card-content" data-img="/img/climate.jpeg">
        {{-- <img src="img/services/ac.png" class="avatar" alt="Aire Acondicionado"/> --}}
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
    <div class="card-content" data-img="/img/scanning.jpeg">
        {{-- <img src="img/services/diagnostic.png" class="avatar" alt="Diagnóstico"/> --}}
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
    <div class="card-content" data-img="/img/afinity_2.jpeg">
        {{-- <img src="img/services/tune-up.png" class="avatar" alt="Afinación"/> --}}
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
    <div class="card-content" data-img="/img/align.jpeg">
        {{-- <img src="img/services/alignment.png" class="avatar" alt="Alineamiento"/> --}}
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
    <div class="card-content" data-img="/img/motor_2.jpeg">
        {{-- <img src="img/services/engine-rebuild.png" class="avatar" alt="Reconstrucción motor"/> --}}
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
    <div class="card-content" data-img="/img/repair.jpeg">
        {{-- <img src="img/services/repairs.png" class="avatar" alt="Reparaciones"/> --}}
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



















  <section class="about-section normal-section" id="schedules">   

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
                <div class="feature-icon">✓ Mision</div>
                <p class="fade-up">Proporcionar reparaciones precisas con transparencia absoluta y garantías reales.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✚ Visión</div>
                <p class="fade-up">Convertirnos en el taller de referencia para vehículos de alta gama en la región.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">♥ Valores</div>
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
    <h2 class="staggered-rise-in">Trayectoria de excelencia automotriz</h2>
</div>

<ul class="timeline">
    <li class="timeline__line"></li>
    
    <!-- Hito 2024 - Expansión -->
    <li class="timeline__item start">
        <div class="info">
            <div class="dot"></div>
            <time class="time">2024</time>
            <h4 class="title">Nueva Sede</h4>
        </div>
        <div class="content">
            <p>Inauguración de nuestras instalaciones premium con tecnología de punta:</p>
            <ul>
                <li>Taller de 1,200 m² con 6 elevadores</li>
                <li>Sala de diagnóstico computarizado</li>
                <li>Área especializada en vehículos eléctricos</li>
            </ul>
        </div>
    </li>
    
    <!-- Hito 2020 - Certificación -->
    <li class="timeline__item">
        <div class="info">
            <div class="dot"></div>
            <time class="time">2020</time>
            <h4 class="title">Certificación ASE</h4>
        </div>
        <div class="content">
            <p>Nuestro equipo obtiene las certificaciones más prestigiosas:</p>
            <ul>
                <li>5 técnicos certificados Master Automobile Technician</li>
                <li>Primer taller en la región con certificación EV</li>
                <li>Alianza con fabricantes de herramientas Snap-on</li>
            </ul>
        </div>
    </li>
    
    <!-- Hito 2016 - Innovación -->
    <li class="timeline__item">
        <div class="info">
            <div class="dot"></div>
            <time class="time">2016</time>
            <h4 class="title">Revolución Tecnológica</h4>
        </div>
        <div class="content">
            <p>Implementamos sistemas de diagnóstico avanzado:</p>
            <ul>
                <li>Scanner Autel MaxiSys Pro</li>
                <li>Equipo de alineación Hunter 4D</li>
                <li>Software de gestión de mantenimiento predictivo</li>
            </ul>
        </div>
    </li>
    
    <!-- Hito 2012 - Crecimiento -->
    <li class="timeline__item break">
        <div class="info">
            <div class="dot"></div>
            <time class="time">2012</time>
            <h4 class="title">Expansión de Servicios</h4>
        </div>
        <div class="content">
            <p>Incorporamos nuevas especializaciones:</p>
            <ul>
                <li>Departamento de carrocería y pintura</li>
                <li>Servicio 24/7 para flotas vehiculares</li>
                <li>Programa de mantenimiento para taxis</li>
            </ul>
        </div>
    </li>
    
    <!-- Hito 2005 - Fundación -->
    <li class="timeline__item end">
        <div class="info">
            <div class="dot"></div>
            <time class="time">2005</time>
            <h4 class="title">Nuestros Inicios</h4>
        </div>
        <div class="content">
            <p>Humble beginnings in a small garage:</p>
            <ul>
                <li>Fundado por Juan Pérez, mecánico con 20 años de experiencia</li>
                <li>Primer cliente: reparación de transmisión Chevrolet</li>
                <li>Filosofía inicial: "Reparar cada auto como si fuera nuestro"</li>
            </ul>
        </div>
    </li>
</ul>





  </section>
















  



  <section class="normal-section" id="location">
<div class="titles">
    <h1 class="cross-bar-glitch" data-slice="20">CONTACTO</h1>
    <h2 class="staggered-rise-in">Expertos listos para atenderte</h2>
</div>

<div class="contact-container">
    <!-- Sección de Información de Contacto -->
    <div class="contact-info">

        <div class="contact-card">
          <div class="">
            <div class="contact-icon" >🕒 Horario</div>
          </div>
            <p class="fade-up">Lunes a Viernes: 8:00 AM - 6:00 PM<br>
               Sábados: 9:00 AM - 2:00 PM<br>
               <em>Servicio de emergencias 24/7</em></p>
        </div>

        <div class="contact-card">
          <div class="">
            <div class="contact-icon" >📞 Contáctanos</div>
          </div>
            <p class="fade-up"><a href="tel:+526641234567">+52 664 123 4567</a><br>
               <a href="tel:+526641234568">+52 664 123 4568</a></p>
            <div class="social-links">
                <a href="https://wa.me/526641234567" class="social-icon whatsapp">WhatsApp</a>
                <a href="https://m.me/tutaller" class="social-icon messenger">Messenger</a>
            </div>
        </div>
    </div>

    <!-- Mapa y Ubicación Mejorados -->
    <div class="map-section">
        <div class="place">
            <div class="marker fade-in">
                <div class="pin"></div>
                <div class="pulse"></div>
                <div class="shadow"></div>
            </div>
            <div class="place-name cross-bar-glitch" data-slice="20">
                Mecánica Premium Tijuana
            </div>
        </div>
        
        <div id="map" class="fade-in interactive-map">
            <!-- Iframe de Google Maps o contenedor para API -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.254715832639!2d-116.982024924338!3d32.51449287378115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d938f6f6b181c1%3A0x3a9b8a6a6e5e5e6e!2sAv.%20Tecnol%C3%B3gico%201234%2C%20Zona%20Industrial%2C%20Tijuana%2C%20B.C.!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"></iframe>
        </div>
                <div class="contact-card">
            <div class="contact-icon">📍Ubicación</div>
            <p class="fade-up">Av. Tecnológico 1234<br>Zona Industrial, Tijuana, B.C.</p>
            <p class="fade-up">
              <a href="https://maps.app.goo.gl/..." class="map-link" target="_blank">Ver en Google Maps →</a>
            </p>
        </div>
    </div>

    <!-- Formulario de Contacto -->
    <div class="contact-form">
        <h3 class="form-title">¿Necesitas ayuda inmediata?</h3>
        <p class="form-subtitle">Déjanos tus datos y te contactaremos en menos de 15 minutos</p>
        
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Nombre completo" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Teléfono" required>
            </div>
            <div class="form-group">
                <select name="service" required>
                    <option value="" disabled selected>Servicio requerido</option>
                    <option value="emergency">Emergencia mecánica</option>
                    <option value="preventive">Mantenimiento preventivo</option>
                    <option value="diagnostic">Diagnóstico computarizado</option>
                    <option value="other">Otro servicio</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Describe brevemente tu problema..."></textarea>
            </div>
            <div class="btn-submit">
              <a type="submit" class="btn submit-btn-ghost submit-btn-through">Solicitar asistencia</a>
            </div>
            
        </form>
    </div>
</div>
  </section>

















  <section class="normal-section" id="sponsors">
    <div class="titles">
      <h1 class="cross-bar-glitch" data-slice="20">MARCAS</h1>
      <h2 class="staggered-rise-in">Conoce las marcas de productos con las que prestamos nuestros servicios</h2>
    </div>
    <ul class="sponsors-list">
      <li class="fade-up">
        <a href="https://www.bosch.com.mx/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/bosch-1.svg" alt="Ucloud" />
        </a>
        <div>Bosch</div>
      </li>
      <li class="fade-up">
        <a href="https://www.mahle.com/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/mahle.svg" alt="Ucloud" />
        </a>
        <div>MAHLE</div>
      </li>
      <li class="fade-up">
        <a href="https://www.ngk.com/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/ngk.svg" alt="Ucloud" />
        </a>
        <div>NGK</div>
      </li>
      <li class="fade-up">
        <a href="https://www.denso.com/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/denso-2.svg" alt="Ucloud" />
        </a>
        <div>Denso</div>
      </li>
      <li class="fade-up">
        <a href="www.schaeffler.us" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/luk-1.svg" alt="Ucloud" />
        </a>
        <div>Luk</div>
      </li>
      <li class="fade-up">
        <a href="https://www.skf.com/group" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/skf-1.svg" alt="Ucloud" />
        </a>
        <div>SKF</div>
      </li>
      <li class="fade-up">
        <a href="https://www.continental-tires.com/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/continental-2.svg" alt="Ucloud" />
        </a>
        <div>Continental</div>
      </li>
      <li class="fade-up">
        <a href="https://www.idolz.com/" target="_blank">
          <img src="https://cdn.brandfetch.io/id14pwjWFQ/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1743303287220" alt="Ucloud" />
        </a>
        <div>DOLZ</div>
      </li>
      <li class="fade-up">
        <a href="https://www.valeo.com/" target="_blank">
          <img src="https://images.seeklogo.com/logo-png/14/1/valeo-logo-png_seeklogo-147157.png" alt="Ucloud" />
        </a>
        <div>Valeo</div>
      </li>
      <li class="fade-up">
        <a href="https://aftermarket.zf.com/" target="_blank">
          <img src="https://cdn.worldvectorlogo.com/logos/sachs-1.svg" alt="Ucloud" />
        </a>
        <div>SACHS</div>
      </li>
    </ul>
  </section>





















  <section class="video-section" id="blank" >
  <video autoplay muted loop playsinline class="bg-video">
    <source src="/videos/adpp_2.mp4" type="video/mp4" />
    Tu navegador no soporta videos HTML5.
  </video>

  <div class="video-content">
    <h1>Hasta luego</h1>
    <p>Esperamos verte pronto por aqui, tu taller de confianza</p>
  </div>
</section>





































@endsection