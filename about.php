<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <main class="container section">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="aboutContent">
            <div class="aboutImg">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img src="build/img/nosotros.jpg" alt="Sobre nosostros" loading="lazy">
                </picture>
            </div>

            <div class="aboutText">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc
                    aliquet
                    molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis
                    convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan
                    maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus
                    tempor.
                    Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus,
                    urna
                    nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada
                    sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.
                </p>
            </div>
        </div>
    </main>

    <section class="container section">
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
    </section>

<?php
    includeTemplate('footer');
?>