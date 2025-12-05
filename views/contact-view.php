<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:title" content="Contacto - MB Retrofit Almería">
  <title>Contacto - MB Retrofit Almería</title>
  <link rel="icon" href="./img/mbr_logo.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="./img/mbr_logo.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <div class="navigation-block">
      <div>
        <a href="index.php">
          <img class="navigation-logo" src="img/mbr_logo-sin_fondo.png" alt="Logo" />
        </a>
      </div>
      <div>
        <ul class="navigation">
          <li class="navigation-item navigation-link">
            <a class="navigation-item_content" href="index.php">
              <span class="navigation-item_label">Inicio</span>
            </a>
          </li>
          <li class="navigation-item navigation-link">
            <a class="navigation-item_content" href="servicios.php">
              <span class="navigation-item_label">Servicios</span>
            </a>
          </li>
          <li class="navigation-item navigation-link">
            <a class="navigation-item_content" href="contacto.php">
              <span class="navigation-item_label bolded">Contacto</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <div class="contact-block">
      <section id="contacto" class="contact">
        <h2 class="heading-text contact-hearder text-align-center">Contacto</h2>
        <p class="content-justification-center text-align-center">
          Para cualquier consulta, puedes escribirnos directamente a través
          del siguiente formulario, por <a href="mailto:mbretrofitalmeria@gmail.com" id="link_mail_contacto">correo
            electrónico</a>, o por
          <a id="link_wp" href="https://api.whatsapp.com/send/?phone=34645482782">WhatsApp<img
              src="./img/whatsapp_icon.png" alt="WhatsApp Icon" width="20" height="20" /></a>
        </p>
        <p class="content-justification-center text-align-center">
          Nuestro horario de atencion es de 9:00 a 18:00 de Lunes a Viernes.
        </p><br />
        <p class="content-justification-center text-align-center">
          Le atenderemos lo antes posible. (Máximo 24 horas)
        </p>
        <form action="./utilities/send_request.php" method="POST">
          <input type="text" name="nombre" placeholder="Nombre" required />
          <input type="email" name="email" placeholder="Correo electrónico" required />
          <input type="tel" name="telefono" placeholder="Teléfono (Opcional)" />
          <input type="text" name="vin"
            placeholder="VIN del vehículo (Si le preocupa la privacidad sobre el vehículo, puede omitir los 6 ultimos dígitos)"
            required />
          <textarea placeholder="Mensaje" name="mensaje" rows="5" required></textarea>
          <button type="submit">Enviar consulta</button>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <div class="footer-block">
      <div>
        <span class="text-align-center">
          MB Retrofit Almería © 2025. Todos los derechos reservados.
        </span>
      </div>
    </div>
  </footer>

</body>

</html>