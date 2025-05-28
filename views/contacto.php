<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/styles.css" >
  </head>
  <body>
    <?php include "../components/navbar.php" ?>

    <section class="contact">
      <div class="contact-content">
        <p>
          Nuestro equipo está dedicado a brindarte la mejor experiencia al
          explorar y comprar nuestros productos seleccionados con cuidado.
        </p>
        <p>
          Si tienes dudas sobre algún producto, necesitas asesoría o quieres
          hacer alguna consulta, no dudes en contactarnos mediante este
          formulario. Estamos aquí para ayudarte a encontrar el café perfecto
          para ti.
        </p>
        <p>Gracias por elegirnos y confiar en nuestra calidad.</p>
      </div>

      <form class="contact-form" action="">
        <h2>Contáctanos</h2>
        <input
          type="text"
          name="nombre"
          placeholder="Nombre y apellidos"
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Correo electrónico"
          required
        />
        <textarea
          name="mensaje"
          rows="5"
          placeholder="Tu mensaje"
          required
        ></textarea>
        <label class="checkbox-container">
          <input type="checkbox" name="acepto" required />
          Acepto la recogida y tratamiento de datos
        </label>
        <label class="checkbox-container">
          <input type="checkbox" name="acepto" required />
          Acepto recibir informacion sobre productos y promociones.
        </label>
        <button type="submit" class="btn">Enviar</button>
      </form>
    </section>
    <?php include "../components/footer.php" ?>
    <script
      src="https://kit.fontawesome.com/6209fab7df.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
