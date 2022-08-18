<?php
    require 'includes/functions.php';
    includeTemplate('header', $home = true);
?>

<!--About-->
<main class="container section">
    <h1>Más Sobre Nosotros</h1>

    <div class="aboutIcons">
        <div class="icon">
            <img src="build/img/icono1.svg" alt="Security Icon" loading="lazy">
            <h3>Seguridad</h3>
            <p>Mauris blandit consequat lobortis. Mauris ut ipsum auctor, commodo sem faucibus,
                lacinia arcu. Cras pellentesque molestie diam non interdum.
                Aliquam scelerisque accumsan felis. </p>
        </div>
        <div class="icon">
            <img src="build/img/icono2.svg" alt="Price Icon" loading="lazy">
            <h3>Precio</h3>
            <p>Mauris blandit consequat lobortis. Mauris ut ipsum auctor, commodo sem faucibus,
                lacinia arcu. Cras pellentesque molestie diam non interdum.
                Aliquam scelerisque accumsan felis. </p>
        </div>
        <div class="icon">
            <img src="build/img/icono3.svg" alt="Time Icon" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Mauris blandit consequat lobortis. Mauris ut ipsum auctor, commodo sem faucibus,
                lacinia arcu. Cras pellentesque molestie diam non interdum.
                Aliquam scelerisque accumsan felis. </p>
        </div>
    </div>
</main>
<!--About finish-->

<!--Advertisements-->
<section class="section container">
    <h2>Casas y Departamentos en Venta</h2>

    <div class="advertisementsContainer">
        <div class="advertisements">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="advertisementsContent">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con buena vista, acabados de lujo a un excelente precio</p>
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
                <a href="advertisement.php" class="yellowButtonBlock">
                    Ver Propiedad
                </a>
            </div>

        </div>

        <div class="advertisements">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="advertisementsContent">
                <h3>Casa terminados de Lujo</h3>
                <p>Casa en el lago con buena vista, acabados de lujo a un excelente precio</p>
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
                <a href="advertisement.php" class="yellowButtonBlock">
                    Ver Propiedad
                </a>
            </div>

        </div>

        <div class="advertisements">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
            </picture>

            <div class="advertisementsContent">
                <h3>Casa con Alberca</h3>
                <p>Casa en el lago con buena vista, acabados de lujo a un excelente precio</p>
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
                <a href="advertisement.php" class="yellowButtonBlock">
                    Ver Propiedad
                </a>
            </div>
        </div>
    </div>

    <div class="rigthAlign">
        <a href="advertisements.php" class="greenButton">Ver Todas</a>
    </div>
</section>
<!--Advertisement finish-->

<!--Contact-->
<section class="contactImg">
    <h2>Encuentra la Casa de tus sueños</h2>
    <p>LLena el formulario de contacto y un asesor se pondrá
        en contancto contigo a la brevedad
    </p>
    <a href="contact.php" class="yellowButton">Contáctanos</a>
</section>
<!--Contact finish-->

<!--Blog-->
<div class="container section lowerSection">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="blogEntry">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img src="build/img/blog1.jpg" alt="Blog text entry" loading="lazy">
                </picture>
            </div>

            <div class="entryText">
                <a href="entry.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="metaInfo">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="blogEntry">
            <div class="iamge">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img src="build/img/blog2.jpg" alt="Blog text entry" loading="lazy">
                </picture>
            </div>

            <div class="entryText">
                <a href="entry.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="metaInfo">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para
                        darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimonials">
        <h3>Testimoniales</h3>

        <div class="testimony">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa
                que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Gonzalo Perrone</p>
        </div>
    </section>
</div>
<!--Blog finish-->

<?php
    includeTemplate('footer');
?>