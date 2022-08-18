<?php

require '../../includes/config/database.php';

$db = connectDB();

//Obtain sellers
$consult = "SELECT * FROM sellers";
$result = mysqli_query($db, $consult);

//Array with error messages
$errors = [];


$title = '';
$price = '';
$propertyDescription = '';
$rooms = '';
$wc = '';
$garages = '';
$sellers_id = '';


//Execute the code after user send form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* 
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>'; */

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $price =  mysqli_real_escape_string($db, $_POST['price']);
    $propertyDescription =  mysqli_real_escape_string($db, $_POST['propertyDescription']);
    $rooms =  mysqli_real_escape_string($db, $_POST['rooms']);
    $wc =  mysqli_real_escape_string($db, $_POST['wc']);
    $garages =  mysqli_real_escape_string($db, $_POST['garages']);
    $sellers_id =  mysqli_real_escape_string($db, $_POST['seller']);
    $createdOn = date('Y-m-d');

    //File asign to variable
    $image = $_FILES['image'];
    $size = 1000 * 1000;

    if (!$title) {
        $errors[] = "Debes añadir un titulo";
    }
    if (!$price) {
        $errors[] = "Debes añadir un precio";
    }
    if (!$image['name'] || $image['error']) {
        $errors[] = "Debes subir una imagen";
    }
    if ($image['size'] > $size) {
        $errors[] = "La imagen debe tener como máximo 1mb";
    }
    if (strlen($propertyDescription) < 50) {
        $errors[] = "Debes añadir una descripcion y debe tener al menos 50 caracteres";
    }
    if (!$rooms) {
        $errors[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errors[] = "El numero de baños es obligatorio";
    }
    if (!$garages) {
        $errors[] = "El numero de garages es obligatorio";
    }
    if (!$sellers_id) {
        $errors[] = "Debes seleccionar un vendedor";
    }

    if (empty($errors)) {

        /*Upload images*/
        //Create folder
        $imgFolder = '../../images/';

        if (!is_dir($imgFolder)) {
            mkdir($imgFolder);
        }

        $imgName = md5(uniqid(rand(), true)) . ".jpg";

        move_uploaded_file($image['tmp_name'], $imgFolder . $imgName);

        //Insert to db
        $query = "INSERT INTO properties (title, price, img, propertyDescription, rooms, wc, garages, createdOn, sellers_id)
        VALUES ( '$title', '$price', '$imgName', '$propertyDescription', '$rooms', '$wc', '$garages', '$createdOn', '$sellers_id' )";

        $result = mysqli_query($db, $query);

        if ($result) {
            //Redirect user
            header('Location: /admin?result=1');
        };
    }
};

require '../../includes/functions.php';
includeTemplate('header');

?>
<main class="container section">
    <h1>Crear</h1>

    <a href="/admin" class="btn greenButton">Volver</a>

    <?php foreach ($errors as $error) : ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="form" action="/admin/properties/create.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general</legend>

            <label for="title">Titulo: </label>
            <input type="text" id="title" name="title" placeholder="Titulo de propiedad" value="<?php echo $title; ?>">

            <label for="price">Precio: </label>
            <input type="number" id="price" name="price" placeholder="Precio de propiedad" value="<?php echo $price; ?>">

            <label for="image">Imagen: </label>
            <input type="file" id="image" accept="image/jpeg, image/png" name="image">


            <div class="propertyDescriptionContainer">
                <label for="propertyDescription">Descripcion: </label>
                <div class="theCount" id="theCount">
                    <div class="characteresCount">
                        <span id="current">0</span>
                        <h6 class="noMargin">Caracteres</h6>
                    </div>
                    <span class="characters">(Mínimo 50 caracteres)</span>
                </div>
            </div>
            <textarea id="propertyDescription" name="propertyDescription"><?php echo $propertyDescription; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="rooms">Habitaciones: </label>
            <input type="number" id="rooms" name="rooms" placeholder="Ej: 3" min="1" max="9" value="<?php echo $rooms; ?>">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="garages">Estacionamiento: </label>
            <input type="number" id="garages" name="garages" placeholder="Ej: 3" min="1" max="9" value="<?php echo $garages; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="seller">
                <option value="">Seleccione un vendedor</option>
                <?php while ($seller = mysqli_fetch_assoc($result)) : ?>
                    <option <?php echo $sellers_id === $seller['id'] ? 'selected' : ''; ?> value="<?php echo $seller['id']; ?>"><?php echo $seller['name'] . " " . $seller['lastname']; ?></option>
                <?php endwhile ?>
            </select>
        </fieldset>

        <input type="submit" value="Enviar propiedad" class="greenButton">

    </form>

</main>

<?php
includeTemplate('footer');
?>