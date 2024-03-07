<?php 

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Instanciation d'objet
$hotel1 = new Hotel("Hilton", "10 route de la gare 67000 STRASBOURG", "****");
$hotel2 = new Hotel("Regent", "61 rue Dauphine 75006 PARIS", "****");

$client1 = new Client("MURMANN", "Micka", "06 12 74 45 74", "12-09-1986");

echo $client1->getNom();
echo $hotel1->getAdresse();


?>