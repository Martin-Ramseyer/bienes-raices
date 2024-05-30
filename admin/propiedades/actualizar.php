<?php
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Actualizar</h1>
  <a href="/bienesRaices/admin/index.php" class="boton boton-verde">Volver</a>
  <form action="" class="formulario">
    <fieldset>
      <legend></legend>
    </fieldset>
  </form>
</main>

<?php incluirTemplate('footer'); ?>