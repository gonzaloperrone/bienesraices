<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>
    <main class="container section">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img src="build/img/destacada3.jpg" alt="Imagen contacto" loading="lazy">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="form">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Tu Nombre">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Tu E-mail">

                <label for="phone">Teléfono</label>
                <input type="phone" name="phone" id="phone" placeholder="Tu Teléfono">

                <label for="message">Mensaje</label>
                <textarea name="message" id="message" placeholder="Tu Mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="options">Vende o Compra:</label>
                <select id="options">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="buy">Compra</option>
                    <option value="sell">Vende</option>
                </select>

                <label for="budget">Precio o Presupuesto</label>
                <input type="number" name="budget" id="budget" placeholder="Tu Precio o Presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="contactForm">
                    <label for="phoneContact">Teléfono</label>
                    <input type="radio" name="contact" value="phoneContact" id="phoneContact">
                    <label for="emailContact">E-mail</label>
                    <input type="radio" name="contact" value="emailContact" id="emailContact">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="date">Fecha</label>
                <input type="date" name="date" id="date">
                
                <label for="time">Hora</label>
                <input type="time" name="time" id="time" min="09:00" max="18:00" >

            </fieldset>

            <input type="submit" value="Enviar" class="greenButton">
        </form>
    </main>

<?php
    includeTemplate('footer');
?>