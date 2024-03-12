<?php 

// Création d'une classe Hotel
class Hotel
{
    private string $nom;
    private string $adresse;
    private string $nbEtoile;
    private array $chambres; // Un tableau pour stocker les objets Chambre associés à l'hotêl
    private array $reservations;

    // Constructeur de la classe Hotel
    public function __construct(string $nom, string $adresse, string $nbEtoile)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbEtoile = $nbEtoile;
        $this->chambres = []; // Initialisation du tableau des chambres
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

    // Méthode pour ajouter des reservations automatiquement aux chambres
    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation; 
    }

    // Méthode pour afficher les réservations de l'hôtel
    public function afficherReservations()
    {
        $info = "Réservations de l'hôtel " . $this->nom . "<br>";

        if (empty($this->reservations)) {
            $info .= "Aucune réservation !<br>";
            return $info;
        }

        foreach ($this->reservations as $reservation) {        
            $client= $reservation->getClient(); // Récupère le client de chaque réservation
            $info .= $client . " ";
            $info .= $this;
            $info .= $reservation . "<br>";
    
        }
            return $info;
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

    // Méthode pour affiche le statut des chambres
    public function statutChambre()
    {
        // 🛜
        $info = "Statut des chambres de <strong>l'hôtel " . $this->__toString() . "</strong><br>";
        $info .=
        "<table cellpadding='10'>
            <thead>
                <tr>
                    <th>Chambre</th>
                    <th>Prix</th>
                    <th>Wifi</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>";
            foreach ($this->chambres as $chambre)
            {
                $wifi = $chambre->getWifi() ? "🛜" : "Non";
                $statut = $chambre->getStatut() ? "Disponible" : "Reservée";

                $info .= "<tr>
                            <td>" . $chambre->__toString() . "</td>
                            <td>" . $chambre->getPrix() . "€</td>
                            <td>" . $wifi . "</td>";
                
                if ($chambre->getStatut()) {
                    $info .= "<td style='background-color: #90EE90;'>" . $statut . "</td>";
                } else {
                    $info .= "<td style='background-color: #F00020;'>" . $statut . "</td>";
                }
                $info .= "</tr>";
            }   
            $info .= 
            "</tbody>
        </table>";
        return $info;
    }
    
    // Création d'une méthode toString
    public function __toString()
    {
        return $this->nom . " " . $this->nbEtoile;
    }
}


?>
    <!-- $info .= $chambre->__toString() . " " . $chambre->getPrix() . "€" . " " . ($chambre->getWifi() ? "oui" : "Non") . " " . ($chambre->getStatut() ? "Disponible" : "Occupée") . "<br>"; -->