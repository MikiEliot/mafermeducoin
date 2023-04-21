<?php

namespace App\models;
use App\models\DbConnector as DbConnector;


/* Cette classe définit un modèle pour un objet Producteur, 
   qui contient des propriétés pour les informations d'un producteur */

class Producteur {
    public $nomProducteur;
    public $ville;
    public $rue;
    public $codePostal;
    public $description;
    public $siret;
    public $website;
    public $horaires;

    public function __construct($nomProducteur, $ville, $rue, $codePostal, $description, $siret,$website,$horaires) {
        $this->nomProducteur = $nomProducteur;
        $this->ville = $ville;
        $this->rue = $rue;
        $this->codePostal = $codePostal;
        $this->siret = $siret;
        $this->description = $description;
        $this->website = $website;
        $this->horaires = $horaires;
       
    }
    
/* Cette methode récupère tous les enregistrements de la table "producteurs" 
   dans la base de données à l'aide de la méthode PDO fetchAll(), 
   qui renvoie un tableau contenant toutes les lignes de résultat sous forme de tableau associatif. */

    public static function fetchAll() {
        $pdo =DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM producteurs');
        $req->execute();
        $result = $req->fetchAll($pdo::FETCH_ASSOC);
        $producteurs = [];

        foreach ($result as $row) {
            $producteurs[] = new Producteur(
                $row['nomProducteur'],
                $row['ville'],
                $row['rue'],
                $row['codePostal'],
                $row['description'],
                $row['siret'],
                $row['website'],
                $row['horaires']
            
            );
        }

        return $producteurs;
    }


   /* Cette methode récupère les informations d'un producteur en fonction de son numéro SIRET.
    La fonction crée un objet Producteur en utilisant les données de l'enregistrement trouvé, 
    en utilisant les valeurs des colonnes pour initialiser les propriétés de l'objet. */

    public static function fetchBySiret($siret) {
        $pdo =DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM producteurs WHERE siret = :siret');
        $req->execute(['siret' => $siret]);
        $row = $req->fetch($pdo::FETCH_ASSOC);

        if ($row === false) {
            return "producteur n'a pas éte trouvé";
        }
        return new Producteur(
            $row['nomProducteur'],
            $row['ville'],
            $row['rue'],
            $row['codePostal'],
            $row['description'],
            $row['siret'],
            $row['website'],
            $row['horaires']
        );
    }
    
    public static function update($description, $website, $horaires,$siret) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('UPDATE producteurs SET description = :description, website = :website, horaires = :horaires WHERE siret = :siret');
        $req->execute([
            'description' => $description,
            'website' => $website,
            'horaires' => $horaires,
            'siret' => $siret
        ]);
    }
}



?>