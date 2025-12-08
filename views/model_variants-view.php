<?php
/** @var $modelo */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Modelos - MB Retrofit Almería">
    <title>Modelos - MB Retrofit Almería</title>
    <link rel="icon" href="./img/mbr_logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/mbr_logo.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/pages/style-services.css" />
    <meta charset="UTF-8">
    <title><?= $modelo['nombre'] ?> - Años</title>
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
            <h1 class="text-align-center heading-text model-header"><?= $modelo['nombre'] ?> - Selecciona un año</h1>
            <div class="container-models">
                <?php foreach ($modelo['anios'] as $anio => $infoAnio): ?>
                    <div class="model-block">
                        <span class="service-block-tittle"><?= $anio ?></span>
                        <img src="./img/modelos/<?= $infoAnio['imagen'] ?>" alt="Variante" loading="lazy">
                        <a class="block-button-service" href="lista_servicios.php?id=<?= $id ?>&anio=<?= $anio ?>">Servicios
                            disponibles</a>
                    </div>
                <?php endforeach; ?>
            </div>
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