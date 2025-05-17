<footer class="refined-footer">
  <div class="footer-top">
    <div class="about">
      <h2 class="logo">Neon Garage</h2>
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
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>





































































<style>
.refined-footer {
  background: #f5f5f5;
  color: #222;
  font-family: 'Segoe UI', sans-serif;
  box-shadow: inset 0 2px 8px rgba(0,0,0,0.05);
  position: relative;
  overflow: hidden;
}

.footer-top {
  max-width: 1300px;
  margin: auto;
  padding: 4rem 2rem 2rem;
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 3rem;
  position: relative;
}

.footer-top::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle at top right, rgba(0,0,0,0.05), transparent);
  z-index: 0;
}

.footer-top > * {
  z-index: 1;
}

.about h2.logo {
  font-size: 2rem;
  margin-bottom: 1rem;
  font-weight: bold;
  color: #111;
  position: relative;
}

.about p {
  font-size: 0.95rem;
  line-height: 1.6;
}

.columns {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  gap: 2rem;
}

.col h4 {
  font-size: 1.1rem;
  margin-bottom: 0.8rem;
  position: relative;
}

.col ul {
  list-style: none;
  padding: 0;
}

.col ul li {
  margin-bottom: 0.6rem;
  font-size: 0.95rem;
  color: #555;
  transition: transform 0.3s ease;
}

.col ul li a {
  text-decoration: none;
  color: #555;
  position: relative;
}

.col ul li a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 0%;
  height: 2px;
  background: #333;
  transition: width 0.3s;
}

.col ul li a:hover::after {
  width: 100%;
}

.col ul li:hover {
  transform: translateX(4px);
}

.contact i {
  margin-right: 8px;
  color: #777;
}

.newsletter {
  grid-column: span 2;
  margin-top: 2rem;
}

.newsletter h4 {
  font-size: 1rem;
  margin-bottom: 0.6rem;
}

.newsletter form {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
  background: #fff;
  border: 1px solid #ccc;
  padding: 0.5rem;
  border-radius: 6px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
}

.newsletter input {
  flex: 1;
  padding: 0.5rem;
  border: none;
  outline: none;
}

.newsletter button {
  background: #222;
  color: #fff;
  border: none;
  padding: 0 1rem;
  cursor: pointer;
  border-radius: 4px;
  transition: background 0.3s;
}

.newsletter button:hover {
  background: #000;
}

.footer-bottom {
  border-top: 1px solid #ddd;
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1300px;
  margin: auto;
  font-size: 0.9rem;
  color: #777;
  flex-wrap: wrap;
  gap: 1rem;
}

.socials a {
  margin-left: 1rem;
  color: #555;
  font-size: 1.2rem;
  transition: transform 0.3s ease, color 0.3s ease;
}

.socials a:hover {
  color: #000;
  transform: scale(1.2);
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
}

</style>












































¿