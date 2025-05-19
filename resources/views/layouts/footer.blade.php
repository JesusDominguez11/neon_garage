<footer class="refined-footer">
  <div class="footer-top">
    <div class="about">
      <h2 class="logo">tork</h2>
      <p>Transformamos vehículos con elegancia, tecnología y precisión. Mantenimiento, restauración y diseño automotriz de alto nivel.</p>
    </div>

    <div class="columns">
      <div class="col">
        <h4>Servicios</h4>
        <ul>
          <li><a href="#">Mantenimiento premium</a></li>
          <li><a href="#">Pintura profesional</a></li>
          <li><a href="#">Modificación de interiores</a></li>
          <li><a href="#">Restauración completa</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Empresa</h4>
        <ul>
          <li><a href="#">Sobre nosotros</a></li>
          <li><a href="#">Carreras</a></li>
          <li><a href="#">Testimonios</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="col contact">
        <h4>Contacto</h4>
        <ul>
          <li><i class="fas fa-phone"></i> +52 55 1234 5678</li>
          <li><i class="fas fa-envelope"></i> contacto@neongarage.com</li>
          <li><i class="fas fa-map-marker-alt"></i> CDMX, México</li>
        </ul>
      </div>
    </div>

    <div class="newsletter">
      <h4>Únete a nuestro boletín</h4>
      <form>
        <input type="email" placeholder="Tu email" required>
        <button type="submit"><i class="fas fa-paper-plane"></i></button>
      </form>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Neon Garage. Todos los derechos reservados.</p>
    <div class="socials">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>

<!-- FontAwesome -->
{{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}





































































<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");

  .refined-footer {
  background: linear-gradient(135deg, #898ba385 0%, #000000 100%);
  color: #cfd8e6;
  /* font-family: 'Segoe UI', sans-serif; */
  font-family: Montserrat, sans-serif;
  box-shadow:
    inset 0 2px 10px rgba(255, 255, 255, 0.05),
    0 12px 30px rgba(0, 0, 0, 0.8);
  position: relative;
  overflow: hidden;
  border-top: 4px solid #7e9acd;
}

.footer-top {
  max-width: 1300px;
  margin: auto;
  padding: 4rem 2rem 2rem;
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 3rem;
  position: relative;
  z-index: 10;
}

.footer-top::before {
content: '';
    position: absolute;
    top: -50px;
    /* right: -150px; */
    width: 400px;
    height: 400px;
    background: radial-gradient(circle at top right, #cfd8e6, #000000 70%);
    filter: blur(60px);
    z-index: 0;
    animation: pulseGlow 6s ease-in-out infinite;
}

@keyframes pulseGlow {
  0%, 100% {
    transform: scale(1);
    opacity: 0.3;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.6;
  }
}

.about h2.logo {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  font-weight: 900;
  color: #cfd8e6;
  position: relative;
  cursor: default;
  overflow: hidden;
}

.about h2.logo::before {
  content: '';
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(120deg, transparent, rgba(255,255,255,0.4), transparent);
  transform: skewX(-20deg);
  animation: shine 3s infinite;
  pointer-events: none;
}

@keyframes shine {
  0% {
    left: -75%;
  }
  100% {
    left: 125%;
  }
}

.about p {
  font-size: 1rem;
  line-height: 1.7;
  color: #abb7c7;
  max-width: 400px;
}

.columns {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  gap: 2rem;
}

.col h4 {
  font-size: 1.2rem;
  margin-bottom: 1rem;
  color: #cfd8e6;
  position: relative;
  letter-spacing: 0.03em;
}

.col h4::after {
  content: '';
  display: block;
  width: 40px;
  height: 3px;
  background: #7e9acd;
  margin-top: 6px;
  border-radius: 2px;
}

.col ul {
  list-style: none;
  padding: 0;
}

.col ul li {
  margin-bottom: 0.8rem;
  font-size: 1rem;
  color: #95a1b7;
  cursor: pointer;
  position: relative;
  transition: transform 0.3s ease, color 0.3s ease;
}

.col ul li a {
  text-decoration: none;
  color: inherit;
  position: relative;
  display: inline-block;
}

.col ul li a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 0%;
  height: 3px;
  background: #7e9acd;
  transition: width 0.3s ease;
  border-radius: 2px;
}

.col ul li a:hover::after {
  width: 100%;
}

.col ul li:hover {
  color: #cfd8e6;
  transform: translateX(6px);
  text-shadow: 0 0 8px #4a90e288;
}

.contact i {
  margin-right: 10px;
  color: #cfd8e6;
  transition: color 0.3s ease;
}

.contact li:hover i {
  color: #7e9acd;
}

.newsletter h4 {
  font-size: 1.2rem;
  margin-bottom: 0.8rem;
  color: #cfd8e6;
  letter-spacing: 0.02em;
}

.newsletter form {
  display: flex;
  gap: 0.7rem;
  flex-wrap: wrap;
  background: #2a2e3c;
  border-radius: 8px;
  box-shadow: inset 0 0 8px #898ba3b8, 0 4px 15px #4a90e203;
  padding: 0.7rem 1rem;
  transition: box-shadow 0.3s ease;
}

.newsletter input {
  flex: 1;
  padding: 0.7rem 1rem;
  border: none;
  outline: none;
  border-radius: 6px;
  font-size: 1rem;
  background: #1c1e26;
  color: #cfd8e6;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  box-shadow: inset 0 2px 5px #000a;
}

.newsletter input:focus {
  background: #242731;
  /* box-shadow: 0 0 8px #cfd8e650; */
}

.newsletter button {
  background: #4a90e2;
  color: #e1e9f7;
  border: none;
  padding: 0 1.3rem;
  cursor: pointer;
  border-radius: 6px;
  font-weight: 700;
  font-size: 1.1rem;
  transition: background 0.4s ease, transform 0.2s ease;
  box-shadow: 0 3px 10px #4a90e255;
  display: flex;
  align-items: center;
  justify-content: center;
}

.newsletter button i {
  transition: transform 0.3s ease;
}

.newsletter button:hover {
  background: #67a1f3;
  transform: scale(1.1);
  box-shadow: 0 6px 15px #67a1f399;
}

.newsletter button:hover i {
  transform: translateX(4px);
}

.footer-bottom {
  border-top: 1px solid #3a3f56;
  padding: 1.2rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1300px;
  margin: auto;
  font-size: 0.9rem;
  color: #8f9bb3;
  flex-wrap: wrap;
  gap: 1rem;
  position: relative;
  z-index: 10;
}

.socials a {
  margin-left: 1.2rem;
  color: #a3afce;
  font-size: 1.4rem;
  transition: transform 0.3s ease, color 0.3s ease;
  filter: drop-shadow(0 0 2px #4a90e288);
}

.socials a:hover {
  color: #7e9acd;
  transform: scale(1.4) rotate(10deg);
  filter: drop-shadow(0 0 8px #4a90e2cc);
  animation: bounce 0.6s;
}

@keyframes bounce {
  0%, 100% {
    transform: scale(1.4) rotate(10deg);
  }
  50% {
    transform: scale(1.6) rotate(-10deg);
  }
}

@media (max-width: 768px) {
  .footer-top {
    grid-template-columns: 1fr;
  }

  .newsletter {
    grid-column: span 1;
  }

  .footer-bottom {
    flex-direction: column;
    align-items: flex-start;
  }

  .socials a {
    margin-left: 0;
    margin-right: 1rem;
  }
}

</style>