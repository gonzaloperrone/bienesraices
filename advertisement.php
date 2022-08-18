<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <main class="container section contentCenter">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img src="build/img/destacada.jpg" alt="Imagen de la propiedad" loading="lazy">
        </picture>

        <div class="propertyResume">
            <p class="price">$3,000,000</p>
            <ul class="characteristicsIcons">
                <li>
                    <img class="icon" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icon" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icon" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

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