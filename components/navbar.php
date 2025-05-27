<?php 
    if(!defined('BASE_URL')) {
        require_once __DIR__ . '/../controllers/config.php';
    }
?>

<nav class="navbar">
    <a href="index.php" class="logo-link">
        <h3 class="logo nav-link">Café</h3>
    </a>
    <ul class="nav-links">
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>views/productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>views/blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>views/contacto.php">Contacto</a>
        </li>
    </ul>
</nav>