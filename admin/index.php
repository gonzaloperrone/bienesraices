<?php

    //Database import
    require '../includes/config/database.php';
    $db = connectDB();

    //Write query
    $query = "SELECT* FROM properties";

    //Consult Database
    $resultDB = mysqli_query($db, $query);

    //Message
    $result = $_GET['result'] ?? null;

    require '../includes/functions.php';
    includeTemplate('header');

?>
    <main class="container section">
        <h1>Admin de bienes raices</h1>
        <?php if($result == 1): ?>
            <p class="alert correct">Anuncio creado correctamente</p>
            <?php endif; ?>
        <a href="/admin/properties/create.php" class="btn greenButton">Nueva propiedad</a>
    
        <table class="properties">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while($property = mysqli_fetch_assoc($resultDB)): ?>
                <tr>
                    <td><?php echo $property['id'] ?></td>
                    <td><?php echo $property['title'] ?></td>
                    <td><img src="/images/<?php echo $property['img'] ?>" class="tableImage" alt="Imagen Propiedad"></td>
                    <td>$ <?php echo $property['price'] ?></td>
                    <td>
                        <a href="#" class="redButtonBlock">Eliminar</a>
                        <a href="admin/properties/update.php?id=<?php echo $property['id'] ?>" class="blueButtonBlock">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

    //Close connection
    mysqli_close($db);

    includeTemplate('footer');
?>