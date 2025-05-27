<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafeteria</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <?php include "components/navbar.php"?>

    <header class="hero">
      <div class="hero-content">
        <h1 class="hero-title">
          Bienvenido a nuestra cafetería, donde cada taza cuenta.
        </h1>
        <p class="hero-description">
          Ofrecemos café de alta calidad, productos artesanales y un ambiente
          único para disfrutar cada momento.
        </p>
        <p>
          Creamos momentos inolvidables alrededor de una buena taza. Descubre
          nuestros productos y comparte la pasión por el café.
        </p>
        <a href="views/contacto.php" class="btn">Contáctanos!</a>
      </div>
    </header>

    <secttion class="home-products">
      <h2 class="products-title">Nuestros Productos</h2>
      <div class="home-product-list">
        <a href="views/productos.php" class="product-item">
          <img
            src="img/producto1.jpg"
            alt="Café Espresso"
            class="product-image"
          />
          <h3 class="product-name">Café Espresso</h3>
          <p class="product-description">
            Un espresso intenso y aromático, perfecto para empezar el día.
          </p>
        </a>
        <a href="views/productos.php" class="product-item">
          <img src="img/producto1.jpg" alt="Café Latte" class="product-image" />
          <h3 class="product-name">Café Latte</h3>
          <p class="product-description">
            Suave y cremoso, ideal para disfrutar en cualquier momento.
          </p>
        </a>
        <a href="views/productos.php" class="product-item">
          <img
            src="img/producto1.jpg"
            alt="Café Americano"
            class="product-image"
          />
          <h3 class="product-name">Café Americano</h3>
          <p class="product-description">
            Un clásico americano, fuerte y reconfortante.
          </p>
        </a>
      </div>
      <a href="views/productos.php" class="btn">Ver Productos</a>
    </secttion>
    <?php include "components/footer.php"?>

    <script
      src="https://kit.fontawesome.com/6209fab7df.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
