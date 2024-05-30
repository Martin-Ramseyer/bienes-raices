  <?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía decoración hogar</h1>
        <p class="informacion-meta">Escrito el: <span>20/11/2023</span> por: <span>Administrador</span></p>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp" />
            <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen propiedad" />
          </picture>

          <div class="resumen-propiedad">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia possimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempora quo quibusdam. Tenetur, praesentium, recusandae quidem nemo quibusdam exercitationem laborum aliquam!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, soluta recusandae atque voluptate iure alias deleniti repellendus optio doloribus, fugit quia tempora officia. Libero amet nulla veritatis quis mollitia eligendi facere ducimus laudantium vero fugiat. A neque eius tempora. Voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error impedit fugiat aperiam veritatis non repellendus accusamus et optio voluptates ut porro facere natus atque dignissimos delectus, corporis exercitationem laborum aliquam!</p>
          </div>
    </main>

    <?php incluirTemplate('footer'); ?>
