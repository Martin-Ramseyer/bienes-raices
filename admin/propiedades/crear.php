<?php
//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/bienesRaices/admin/index.php" class="boton boton-verde">Volver</a>
  <form action="" class="formulario">
    <fieldset>
        <legend>Información General</legend>
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" placeholder="Titulo Propiedad" name="titulo">

        <label for="precio">Precio:</label>
        <input type="number" id="precio" placeholder="Precio Propiedad" name="precio">

        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png, image/webp" name="imagen">

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>
    </fieldset>

    <fieldset>
        <legend>Información Propiedad</legend>
        <label for="habitaciones">Habitaciones</label>
        <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9">

        <label for="wc">Baños</label>
        <input type="number" id="wc" name="wc" placeholder="Ej. 2" min="1" max="9">

        <label for="estacionamiento">Estacionamiento</label>
        <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 2" min="1" max="9">
    </fieldset>

    <fieldset>
        <legend>Vendedor</legend>
        <select name="vendedor">
            <option value="">-- Seleccione --</option>
            <option value="1">Vendedor 1</option>
            <option value="2">Vendedor 2</option>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>

<?php incluirTemplate('footer'); ?>