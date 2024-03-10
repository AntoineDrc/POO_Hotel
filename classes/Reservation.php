<?php 

// Création d'une classe Reservation
class Reservation
{
    private DateTime $dateEntree;
    private DateTime $dateSortie;
    private Chambre $chambre;
    private Client $client;

    // Constructeur de la classe Reservation
    public function __construct(string $dateEntree, string $dateSortie, Chambre $chambre, Client $client)
    {
        $this->dateEntree = new DateTime($dateEntree);
        $this->dateSortie = new DateTime($dateSortie);
        $this->chambre = $chambre;
        $this->client = $client;
        // Lorsqu'une réservation est créée, elle est ajoutée à la chambre et au client concernés
        $this->chambre->addReservation($this);
        $this->client->addReservation($this);
    }

    // Création des getters / setters
    public function getDateEntree()
    {
        return $this->dateEntree->format("d/m/Y");
    }

    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie()
    {
        return $this->dateSortie->format("d/m/Y");
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

    // Méthode pour calculer le nombre de nuits de la réservation
    public function nbNuit()
    {
        $nbNuit = date_diff($this->dateEntree, $this->dateSortie);
        return $nbNuit->d;
    }

    // Méthode pour calculer le montant total à régler pour la reservation à partir du nombre de nuits passés à l'hotel
    public function montantTotal()
    {
        return $montantTotal = $this->nbNuit() * $this->chambre->getPrix();
    }

    // Méthode to string pour afficher les dates de la reservation
    public function __toString()
    {
        return " du : " . $this->getDateEntree() . " au " . $this->getDateSortie();
    }
}


?>  