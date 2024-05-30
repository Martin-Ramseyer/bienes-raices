  <?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Sobre nosotros</h1>

        <div class="contenido-nosotros">
          <div class="imagen">
            <picture>
              <source srcset="build/img/nosotros.webp" type="image/webp" />
              <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
              <img
                loading="lazy"
                src="build/img/nosotros.jpg"
                alt="Sobre nosotros"
              />
            </picture>
          </div>
          <div class="texto-nosotros">
            <blockquote>20 años de experiencia</blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia possimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempora quo quibusdam. Tenetur, praesentium, recusandae quidem nemo quibusdam exercitationem laborum aliquam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia eligendi facere ducimus laudantium vero fugiat. A neque eius tempora. Voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error impedit fugiat aperiam veritatis non repellendus accusamus et optio voluptates ut porro facere natus atque dignissimos delectus, corporis exercitationem laborum aliquam!</p>
          </div>
        </div>
    </main>

    <section class="contenedor seccion">
      <h1>Mas sobre nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
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
    </section>

    <?php incluirTemplate('footer'); ?>