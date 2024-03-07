<?php 

// Création d'une classe Reservation
class Reservation
{
    private DateTime $dateEntree;
    private DateTime $dateSortie;
    private Chambre $chambre;
    private Client $client;

    // Création du constructeur de la classe Reservation
    public function __construct(string $dateEntree, string $dateSortie)
    {
        $this->dateEntree = new DateTime($dateEntree);
        $this->dateSortie = new DateTime($dateSortie);
    }

    // Création des getters / setters
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getChambre()
    {
        return $this->chambre;
    }

    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}

?>