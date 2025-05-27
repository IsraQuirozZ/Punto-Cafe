<?php 
  if(!defined('BASE_URL')) {
      require_once __DIR__ . '/../controllers/config.php';
  }
?>
<footer class="footer">
  <p>&copy; 2025 Cafetería. Todos los derechos reservados.</p>
  <nav class="footer-nav">
    <a href="<?= BASE_URL ?>index.php" class="nav-link">Inicio</a>
    <a href="<?= BASE_URL ?>views/productos.html" class="nav-link">Productos</a>
    <a href="<?= BASE_URL ?>views/blog.html" class="nav-link">Blog</a>
    <a href="<?= BASE_URL ?>views/contacto.html" class="nav-link">Contacto</a>
  </nav>
  <p>Deja que el café nos conecte. Síguenos!</p>
  <div class="footer-nav">
    <a href="#">
      <i class="fa-brands fa-square-facebook"></i>
    </a>
    <a href="#">
      <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="#">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
  </div>
</footer>
<!-- Un clásico americano, fuerte y lleno de sabor. -->
