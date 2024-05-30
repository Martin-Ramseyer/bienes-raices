  <?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp" />
            <source srcset="build/img/destacada.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen propiedad" />
          </picture>

          <div class="resumen-propiedad">
            <p class="precio">360.000$</p><ul class="iconos-caracteristicas">
                <li>
                  <img
                  class="icono"
                    loading="lazy"
                    src="build/img/icono_wc.svg"
                    alt="icono wc"
                  />
                  <p>3</p>
                </li>
                <li>
                  <img
                  class="icono"
                    loading="lazy"
                    src="build/img/icono_estacionamiento.svg"
                    alt="icono estacionamiento"
                  />
                  <p>3</p>
                </li>
                <li>
                  <img
                    class="icono"
                    loading="lazy"
                    src="build/img/icono_dormitorio.svg"
                    alt="icono habitaciones"
                  />
                  <p>4</p>
                </li>
              </ul>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia possimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempora quo quibusdam. Tenetur, praesentium, recusandae quidem nemo quibusdam exercitationem laborum aliquam!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia eligendi facere ducimus laudantium vero fugiat. A neque eius tempora. Voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error impedit fugiat aperiam veritatis non repellendus accusamus et optio voluptates ut porro facere natus atque dignissimos delectus, corporis exercitationem laborum aliquam!</p>
          </div>
    </main>

    <?php incluirTemplate('footer'); ?>
