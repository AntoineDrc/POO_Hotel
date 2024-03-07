<?php 

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

?>