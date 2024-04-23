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
$chambre2 = new Chambre("2", 200, true, true, $hotel1);
$chambre3 = new Chambre(1, 120, false, false, $hotel1);

$reservation1 = new Reservation("08-03-2024", "10-03-2024", $chambre1, $client1);
$reservation2 = new Reservation("12-03-2024", "15-03-2024", $chambre1, $client1);

echo $hotel1->infoHotel() . "<br><br>";

echo $hotel1->afficherReservations() . "<br><br>";

echo $hotel2->afficherReservations() . "<br><br>";

echo $client1->showClientReservation() . "<br><br><br>";

echo $hotel1->statutChambre() . "<br>";
