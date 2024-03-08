<?php 

// Création d'une classe Client
class Client 
{
    private string $nom;
    private string $prenom;
    private string $telephone;
    private DateTime $dateNaissance;
    private array $reservations;

    // Constructeur de la classe Client
    public function __construct(string $nom, string $prenom, string $telephone, string $dateNaissance) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->dateNaissance = New DateTime($dateNaissance);
        $this->reservations = [];
    }

    // Création des getters / setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance->format("d/m/Y");
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    // Méthode pour ajouter des reservations automatiquement aux client
    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    // Méthode pour afficher toutes les réservations d'un client
    public function showClientReservation()
    {
        $info = "Réservation de " . $this . "<br>";
        
        foreach($this->reservations as $reservation)
        {
            $info .= $reservation . "<br>";
        }
        return $info;
    }

    // Création d'un méthode toString
    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}
?>