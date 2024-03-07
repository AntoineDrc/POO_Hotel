<?php 

// Création d'une classe Hotel
class Hotel
{
    private string $nom;
    private string $adresse;
    private string $nbEtoile;

    // Création du constructeur de la classe Hotel
    public function __construct(string $nom, string $adresse, string $nbEtoile)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbEtoile = $nbEtoile;
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
}

?>