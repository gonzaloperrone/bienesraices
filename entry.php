<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <main class="container section contentCenter">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpg">
            <img src="build/img/destacada2.jpg" alt="Imagen de la propiedad" loading="lazy">
        </picture>

        <p class="metaInfo">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="propertyResume">

            <p>Aliquam at pharetra enim. Vestibulum a massa a massa mollis tempor. Interdum et malesuada fames ac ante
                ipsum primis in faucibus. Vivamus tincidunt faucibus velit sit amet malesuada. Nulla posuere risus a ex
                pellentesque, luctus porttitor sem dignissim. Aliquam venenatis suscipit libero a pharetra. Suspendisse
                potenti. Sed eleifend mollis ipsum, ut porttitor turpis lobortis sed. Vivamus magna ante, gravida quis
                nisi id, feugiat semper sapien.</p>
        </div>
    </main>

<?php
    includeTemplate('footer');
?>