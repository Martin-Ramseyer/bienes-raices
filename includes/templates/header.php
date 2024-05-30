<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bienesRaices/build/css/app.css" />
    <title>Bienes Raices</title>
  </head>
  <body>
<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/bienesRaices/index.php"><img src="/bienesRaices/build/img/logo.svg" alt="logotipo" /></a>
          <div class="mobile-menu">
            <img src="/bienesRaices/build/img/barras.svg" alt="menu responsive" />
          </div>
          <div class="derecha">
            <img
              src="/bienesRaices/build/img/dark-mode.svg"
              alt="Boton para modo oscuro"
              class="dark-mode-boton"
            />
            <nav class="navegacion mostrar">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          </div>
        </div>
        <!-- Cierra barra -->
        <?php if($inicio) { ?>
          <h1>Venta de casas y departamentos</h1>
        <?php } ?>
      </div>
    </header>