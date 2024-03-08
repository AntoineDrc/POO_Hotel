<?php 

// Création d'une classe Chambre
class Chambre
{
    private string $numero;
    private int $prix;
    private bool $statut;
    private bool $wifi;
    private Hotel $hotel;
    private array $reservations;

    // Construction de la classe Chambre
    public function __construct(string $numero, int $prix, bool $statut, bool $wifi, Hotel $hotel)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->statut = $statut;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);
        $this->reservations = [];
    }

    // Création des getters / setters
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    // Méthode pour ajouter des reservations automatiquement aux chambres
    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    // Méthode pour afficher toutes les réservations d'une chambre
    public function showChambreReservation()
    {
        $info = $this . " est réservé :<br>";

        foreach($this->reservations as $reservation)
        {
            $info .= $reservation . "<br>";
        }
            return $info;


    }

    // Méthode toString
    public function __toString()
    {
        return "Chambre " . $this->numero;
    }
}
?>