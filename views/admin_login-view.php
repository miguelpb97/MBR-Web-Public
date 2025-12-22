<?php

/** @var string|null $error */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Acceso Administración MBR</title>
    <link rel="icon" type="image/png" href="../img/ic_setting.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/style-base.css" />
    <link rel="stylesheet" href="../css/pages/style-admin_login.css" />
</head>

<body>
    <form method="POST">
        <h2 id="titulo">Panel de administración</h2>
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>
    </form>
</body>

</html>