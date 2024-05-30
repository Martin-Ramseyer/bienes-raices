  <?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>
        <picture>
          <source srcset="build/img/destacada3.webp" type="image/webp" />
          <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto" />
        </picture>

        <h2>Llene el formulario de contacto</h2>
        <form action="" class="formulario">
          <fieldset>
            <legend>Informacion personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" id="email">

            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu teléfono" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea name="" id="mensaje"></textarea>
          </fieldset>

          <fieldset>
            <legend>Informacion propiedad</legend>
            <label for="opciones">Vende o compra:</label>
            <select id="opciones">
              <option value="" disabled selected>-- Seleccionar --</option>
              <option value="Compra">Compra</option>
              <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio</label>
            <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
          </fieldset>

          <fieldset>
            <legend>Información sobre la propiedad</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
              <label for="contactar-telefono">Teléfono</label>
              <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
              <label for="contactar-email">E-mail</label>
              <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>

            <p>Si elegiste teléfono, seleccione fecha y hora</p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" id="hora" min="08:00" max="20:00">
          </fieldset>

          <input type="submit" value="Enviar" class="boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>
