<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
</head>

<body>

    <header class="header <?php echo ($home ? 'home' : '') ?>">
        <div class="container headerContent">
            <div class="navbar">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobileMenu">
                    <img src="/build/img/barras.svg" alt="Menu">
                </div>

                <div class="rigth">
                    <img class="darkModeBtn" src="/build/img/dark-mode.svg" alt="Dark Mode">
                    <nav class="nav">
                        <a href="about.php">Nosotros</a>
                        <a href="advertisements.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>