<?php 

// Création d'une classe Hotel
class Hotel
{
    private string $nom;
    private string $adresse;
    private string $nbEtoile;
    private array $chambres;

    // Création du constructeur de la classe Hotel
    public function __construct(string $nom, string $adresse, string $nbEtoile)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbEtoile = $nbEtoile;
        $this->chambres = [];
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

    // Création d'une méthode pour ajouter des chambres automatiquement à l'hotel
    public function addChambre(Chambre $chambre)
    {
        $this->chambres[] = $chambre;   
    }

    // Création d'une méthode toString
    public function __toString()
    {
        return $this->nom . " " . $this->nbEtoile . " " . $this->adresse;
    }
}
        

?>