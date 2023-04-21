<?php

namespace App\models;

use \App\models\Producteur;

class ResultatsRecherche {

    // Définition de propriétés statiques de la classe ResultatsRecherche
    public static $producteurs;
    public static $rechercherPar;
    public static $codePostalOuVille;

    // Définition d'une méthode statique pour effectuer une recherche
    public static function rechercher() {

        // Récupération de tous les producteurs
        self::$producteurs = Producteur::fetchAll();

        // Récupération du paramètre 'rechercher' et transformation en majuscules
        self::$rechercherPar = strtoupper(filter_input(INPUT_GET, 'rechercher', FILTER_SANITIZE_STRING));

        // Récupération du paramètre 'codePostalOuVille'
        self::$codePostalOuVille = filter_input(INPUT_GET, 'codePostalOuVille', FILTER_SANITIZE_STRING);

        // Initialisation de variables
        $codePostal = null;
        $ville = null;
        $listeProducteurs = [];

        // Vérification de la valeur du paramètre 'codePostalOuVille' pour déterminer s'il s'agit d'un code postal ou d'une ville
        if (self::$codePostalOuVille === 'codePostal') {
            $codePostal = self::$rechercherPar;
        } elseif (self::$codePostalOuVille === 'ville') {
            $ville = self::$rechercherPar;
        }

        // Parcours de la liste de producteurs pour les comparer au code postal ou à la ville
        if (!empty(self::$rechercherPar)) {
            foreach (self::$producteurs as $producteur) {
                if ($codePostal !== null && $producteur->codePostal == $codePostal) {
                    $listeProducteurs[] = $producteur;
                } elseif ($ville !== null && $producteur->ville == $ville) {
                    $listeProducteurs[] = $producteur;
                }
            }
        } else {
            // Si aucun paramètre de recherche n'a été fourni, retourner tous les producteurs
            foreach (self::$producteurs as $producteur) {
                $listeProducteurs[] = $producteur;
            }
        }

        // Retourner la liste des producteurs trouvés
        return $listeProducteurs;
    
    }
    
}