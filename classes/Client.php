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
        $this->dateNaissance = new DateTime($dateNaissance);
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
        $this->reservations[] = $reservation; // Ajoute une réservation à la liste des réservations du client, liant ainsi le client à ses réservations.
    }

    // Méthode pour afficher toutes les réservations d'un client
    public function showClientReservation()
    {
        // Afficher le nom du client et le nombre total de ses réservations
        $info = "Réservation de " . $this . "<br>";
        $info .= count($this->reservations) . "Réservations<br>";

        // Parcourt toutes les réservations du client pour inclure les détails dans l'information
        foreach ($this->reservations as $reservation) {
            $chambre = $reservation->getChambre(); // Obtient la chambre pour chaque réservation
            $hotel = $chambre->getHotel(); // Obtient l'hôtel de cette chambre

            // Détails de chaque réservation, y compris l'hôtel, la chambre, et les dates
            $info .= "Hotel " . $hotel->__toString() . " / Chambre : " . $chambre->getNumero() . " - " . $chambre->getPrix() . "€ " . $reservation->__toString() . "<br>";
        }
        // Montant total à payer pour toutes les réservations du client
        $info .= "Total : " . $this->montantTotalReservation() . " €";
        return $info;
    }

    // Méthode pour calculer le montant total à regler pour toutes ses reservations
    public function montantTotalReservation()
    {
        $montantTotal = 0;

        // Parcourt chaque réservation du client et additionne leur montant total
        foreach ($this->reservations as $reservation) {
            $montantTotal += $reservation->montantTotal();
        }
        return $montantTotal;
    }

    // Création d'un méthode toString
    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}
