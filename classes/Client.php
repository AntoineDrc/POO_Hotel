<?php 

// Création d'une classe Client
class Client 
{
    private string $nom;
    private string $prenom;
    private string $telephone;
    private DateTime $dateNaissance;

    // Constructeur de la classe Client
    public function __construct(string $nom, string $prenom, string $telephone, string $dateNaissance) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->dateNaissance = New DateTime($dateNaissance);
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
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}
?>