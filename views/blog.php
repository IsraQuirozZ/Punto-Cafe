<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Blog</title>
    <link rel="stylesheet" href="../css/styles.css" >
  </head>
  <body>
    <?php include "../components/navbar.php" ?>
    <header class="hero-blog">
      <div class="hero-blog-content">
        <h1 class="hero-title">Bienvenido a nuestro blog sobre café y más</h1>
        <p class="hero-description">
          Cada entrada de nuestro blog está pensada para acompañarte con una
          buena taza de café. Aquí compartimos consejos, curiosidades e
          información útil sobre el mundo del café y todo lo que lo rodea.
          Porque no hay mejor momento para aprender o inspirarte que mientras
          disfrutas tu bebida favorita.
        </p>
        <a href="#" class="btn btn-blog">Ver Posts</a>
        <!-- incluir scroll hacia los posts -->
      </div>
    </header>
    <h1 class="blog-title">Todos los artículos</h1>

    <div class="blog-posts">
      <article class="blog-post">
        <img src="../img/blog-img.jpg" alt="imagen articulo" >
        <h3 class="post-title">
          Los mejores métodos para preparar café en casa
        </h3>
        <div class="info-post">
          <p><i class="fa-solid fa-calendar-days"></i> 27/05/2025</p>
          <a href="../blog/entrada1.html">
            <i class="fa-solid fa-circle-arrow-right"></i>
          </a>
        </div>
      </article>
      <article class="blog-post">
        <img src="../img/blog-img.jpg" alt="imagen articulo" >
        <h3 class="post-title">
          Beneficios del café para tu salud
        </h3>
        <div class="info-post">
          <p><i class="fa-solid fa-calendar-days"></i> 27/05/2025</p>
          <a href="../blog/entrada1.html">
            <i class="fa-solid fa-circle-arrow-right"></i>
          </a>
        </div>
      </article>
      <article class="blog-post">
        <img src="../img/blog-img.jpg" alt="imagen articulo" >
        <h3 class="post-title">
          Los mejores métodos para preparar café en casa
        </h3>
        <div class="info-post">
          <p><i class="fa-solid fa-calendar-days"></i> 27/05/2025</p>
          <a href="../blog/entrada1.html">
            <i class="fa-solid fa-circle-arrow-right"></i>
          </a>
        </div>
      </article>
</div>
    <?php include "../components/footer.php" ?>
    <script
      src="https://kit.fontawesome.com/6209fab7df.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
