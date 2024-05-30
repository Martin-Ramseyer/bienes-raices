<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>
<main class="contenedor seccion">
  <h1>Mas sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Accusantium, id facilis? Voluptatibus beatae dolorum est. Vero
        fugiat eos dolor tempora aperiam praesentium numquam, perspiciatis
        harum. Maxime inventore nihil esse aspernatur?
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
        adipisci neque doloremque, veritatis aut veniam mollitia cum sit
        commodi, voluptatem fugit magnam maiores necessitatibus, magni
        repellendus deleniti eius blanditiis nisi.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
        provident eius ut dolore error molestias tenetur magnam?
        Exercitationem, hic sunt cupiditate sit doloremque impedit debitis
        officiis pariatur eum veritatis? Quo.
      </p>
    </div>
  </div>
</main>
<section class="seccion contenedor">
  <h2>Casas y departamentos en venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo en el lago</h3>
        <p>
          Casa en el lago con excelente vista, contenido de lujo a un
          excelente precio
        </p>
        <p class="precio">360.000 $</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio -->
    </div>
    <!-- anuncio -->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa detalles de lujo</h3>
        <p>
          Casa en el lago con excelente vista, contenido de lujo a un
          excelente precio
        </p>
        <p class="precio">360.000 $</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio -->
    </div>
    <!-- anuncio -->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con alberca</h3>
        <p>
          Casa en el lago con excelente vista, contenido de lujo a un
          excelente precio
        </p>
        <p class="precio">360.000 $</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.php" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio -->
    </div>
    <!-- anuncio -->
  </div>
  <!-- .contenedor-anuncio -->

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tu sueños</h2>
  <p>
    Llena el formulario de contacto para que nos pongamos en contacto
    contigo.
  </p>
  <a href="contacto.php" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/11/2023</span> por:
            <span>Administrador</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando presupuesto.
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="entrada blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoración del hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/11/2023</span> por:
            <span>Administrador</span>
          </p>
          <p>
            Máximiza el espacio de tu hogar con esta guía, aprende a
            combinar muebles y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Clientes</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Francisco Cisera</p>
    </div>
  </section>
</div>

<?php incluirTemplate('footer'); ?>