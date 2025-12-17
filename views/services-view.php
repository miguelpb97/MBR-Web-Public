<?php
/** @var $MODELOS */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Servicios - MB Retrofit Almería">
    <title>Servicios - MB Retrofit Almería</title>
    <link rel="icon" href="./img/mbr_logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/mbr_logo.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/pages/style-services.css" />
</head>

<body>
    <header>
        <div class="navigation-block">
            <div>
                <a href="index.php">
                    <img class="navigation-logo" src="./img/mbr_logo-sin_fondo.png" alt="Logo" />
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
                            <span class="navigation-item_label bolded">Servicios</span>
                        </a>
                    </li>
                    <li class="navigation-item navigation-link">
                        <a class="navigation-item_content" href="contacto.php">
                            <span class="navigation-item_label">Contacto</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="container-services">
            <h1 class="text-align-center heading-text model-header">Modelos disponibles</h1>
            <div class="container-models">
                <?php foreach ($MODELOS as $id => $modelo): ?>
                    <div class="model-block">
                        <span class="service-block-tittle"><?= $modelo['nombre'] ?></span>
                        <img src="./img/modelos/<?= $modelo['imagen'] ?>" alt="Modelo" loading="lazy">
                        <a class="block-button-service" href="variantes_modelo.php?id=<?= $id ?>">Ver</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="models-advice-block">
            <p class="text-align-center">* Todos los modelos que aparecen pueden presentar errores en su descripción, falta de servicios y/o modelos, precios equívocos, etc. Por favor téngalo en cuenta, para cualquier duda <a id="link_mail_contacto" class="bolded" href="contacto.php">contáctenos</a>.</p>
        </div>
    </main>

  <footer>
    <div class="footer-block">
      <div>
        <span class="text-align-center">
          MB Retrofit Almería © 2025. Todos los derechos reservados.
        </span>
      </div>
      <div class="terms-and-privacy-links-block">
        <a class="footer-link" href="terminos_condiciones.php">Términos y Condiciones</a>
        <span class="footer-separator">|</span>
        <a class="footer-link" href="politica_privacidad.php">Política de Privacidad</a>
      </div>
    </div>
  </footer>

</body>

</html>