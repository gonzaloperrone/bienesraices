<?php

    require 'app.php';

    function includeTemplate(string $name, bool $home = false) {
        include TEMPLATES_URL."/${name}.php";
    }