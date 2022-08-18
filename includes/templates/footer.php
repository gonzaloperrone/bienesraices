<footer class="footer section">
    <div class="container footerContainer">
        <nav class="nav">
            <a href="about.php">Nosotros</a>
            <a href="advertisements.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
</footer>

<script src="/build/js/bundle.min.js"></script>
<script type="text/javascript">
    $('#propertyDescription').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#theCount');

        current.text(characterCount);
    });

</script>

</body>

</html>