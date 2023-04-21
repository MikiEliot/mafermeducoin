<?php

// Définition de l'espace de noms et importation de la classe DbConnector
namespace App\models;
use App\models\DbConnector as DbConnector;

// Définition de la classe Produit
class Produit {
    public $id; // Propriété publique pour stocker l'ID du produit
    public $nom; // Propriété publique pour stocker le nom du produit

    // Constructeur pour initialiser les propriétés de l'objet Produit
    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    // Méthode statique pour récupérer tous les produits depuis la base de données
    public static function fetchAll() {
        // Établissement de la connection à la base de données en utilisant DbConnector
        $pdo = DbConnector::DbConnect();

        // Préparation de la requête SQL pour récupérer tous les produits
        $req = $pdo->prepare('SELECT * FROM produit');

        // Exécution de la requête
        $req->execute();

        // Récupération de tous les résultats sous forme de tableau associatif
        $result = $req->fetchAll($pdo::FETCH_ASSOC);

        // Initialisation d'un tableau pour stocker tous les produits récupérés
        $produits = [];

        // Parcours de tous les résultats pour créer un objet Produit pour chaque produit
        foreach ($result as $row) {
            $produits[] = new Produit(
                $row['idProduit'], 
                $row['nomProduit'] 
            );
        }

        // Retourne le tableau de tous les produits récupérés
        return $produits;
    }    
}
