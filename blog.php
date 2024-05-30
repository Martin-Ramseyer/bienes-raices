  <?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro blog</h1>

        <div class="contenedor seccion seccion-inferior">
          <section class="blog">
            <h3>Nuestro blog</h3>
            <article class="entrada-blog">
              <div class="imagen">
                <picture>
                  <source srcset="build/img/blog1.webp" type="image/webp" />
                  <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                  <img
                    loading="lazy"
                    src="build/img/blog1.jpg"
                    alt="entrada blog"
                  />
                </picture>
              </div>
              <div class="texto-entrada">
                <a href="entrada.html">
                  <h4>Terraza en el techo de tu casa</h4>
                  <p>Escrito el: <span>20/11/2023</span> por: <span>Administrador</span></p>
                  <p>
                    Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando presupuesto.
                  </p>
                </a>
              </div>
            </article>
    
            <article class="entrada-blog">
              <div class="imagen">
                <picture>
                  <source srcset="build/img/blog2.webp" type="image/webp" />
                  <source srcset="build/img/blog2.jpg" type="image/jpeg" />
                  <img
                    loading="lazy"
                    src="build/img/blog2.jpg"
                    alt="entrada blog"
                  />
                </picture>
              </div>
              <div class="texto-entrada">
                <a href="entrada.html">
                  <h4>Guia para la decoración del hogar</h4>
                  <p>Escrito el: <span>20/11/2023</span> por: <span>Administrador</span></p>
                  <p>
                    Máximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.
                  </p>
                </a>
              </div>
            </article>
          </section>
    
        </div>
    </main>

    <?php incluirTemplate('footer'); ?>
