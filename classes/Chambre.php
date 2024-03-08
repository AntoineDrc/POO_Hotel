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

    // Constructeur de la classe Chambre
    public function __construct(string $numero, int $prix, bool $statut, bool $wifi, Hotel $hotel)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->statut = $statut;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        // L'ajout de la chambre à l'hôtel se fait directement dans le constructeur
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

    public function getReservations()
   {
       return $this->reservations;
   }

    // Méthode pour ajouter des reservations automatiquement aux chambres
    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation; // IMPORTANT : Cette méthode ajoute un objet Reservation au tableau des réservations associées à cette chambre, établissant ainsi la relation entre une chambre et ses réservations.
    }

    // Méthode pour afficher toutes les réservations d'une chambre
    public function showChambreReservation()
    {
        // Récupère l'hôtel associé pour inclure son nom dans les informations
        $hotel = $this->getHotel();
        $info = "Réservations de l'hotêl " . $hotel . "<br>";
        $info .= count($this->getReservations()) . " Réservations<br>";

        // Parcourt toutes les réservations de la chambre pour ajouter leurs détails à la chaîne d'information
        foreach($this->reservations as $reservation)
        {
            $client= $reservation->getClient(); // Récupère le client de chaque réservation
            $info .= $client . " ";
            $info .= $this;
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