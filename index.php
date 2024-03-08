<?php 

// Cette commande sert à charger les classes présentes dans un autre script
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Instanciation d'objet
$hotel1 = new Hotel("Hilton", "10 route de la gare 67000 STRASBOURG", "****");
$hotel2 = new Hotel("Regent", "61 rue Dauphine 75006 PARIS", "****");

$client1 = new Client("MURMANN", "Micka", "06 12 74 45 74", "12-09-1986");

$chambre1 = new Chambre("1", 150, true, true, $hotel1);

$reservation1 = new Reservation("08-03-2024", "10-03-2024", $chambre1, $client1);
$reservation2 = new Reservation("12-03-2024", "15-03-2024", $chambre1, $client1);

echo $client1->showClientReservation() . "<br>";
echo $chambre1->showChambreReservation() . "<br>";

?>