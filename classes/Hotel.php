<?php 

// Création d'une classe Hotel
class Hotel
{
    private string $nom;
    private string $adresse;
    private string $nbEtoile;
    private array $chambres; // Un tableau pour stocker les objets Chambre associés à l'hotêl

    // Constructeur de la classe Hotel
    public function __construct(string $nom, string $adresse, string $nbEtoile)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbEtoile = $nbEtoile;
        $this->chambres = []; // Initialisation du tableau des chambres
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

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNbEtoile()
    {
        return $this->nbEtoile;
    }

    public function setNbEtoile($nbEtoile)
    {
        $this->nbEtoile = $nbEtoile;

        return $this;
    }

    // Méthode pour ajouter des chambres automatiquement à l'hotel
    public function addChambre(Chambre $chambre)
    {
        $this->chambres[] = $chambre;   
    }

    // Méthode pour afficher les informations de l'hôtel et les réservations pour chaque chambre    
    public function infoHotel()
    {
        // Prépare une chaîne d'information de base sur l'hôtel
        $info = $this ."<br>"
        . $this->adresse . "<br>"
        . "Nombre de chambres : " . count($this->chambres) . "<br>";

        // Compte le nombre de chambres qui ont au moins une réservation
        $chambresReservees = 0;
        foreach($this->chambres as $chambre)
        {   
            if(count($chambre->getReservations()) > 0)
            {
                $chambresReservees++;
            }
        }
        // Ajoute le nombre de chambres réservées et disponibles à la chaîne d'information
         $info .= "Chambres réservées : " . $chambresReservees . "<br>";
         $info .= "Chambres disponibles : " . count($this->chambres) - ($chambresReservees) . "<br>";

         return $info;
    }

    // Création d'une méthode toString
    public function __toString()
    {
        return $this->nom . " " . $this->nbEtoile;
    }
}
        

?>