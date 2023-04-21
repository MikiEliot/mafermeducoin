<?php
// Importation de la classe ConnectionProducteur depuis le namespace \App\models
use \App\models\ConnectionProducteur;

// Contrôleur de la déconnexion

// Si un utilisateur est connecté
if (isset($_SESSION['utilisateur'])){
    // On appelle la méthode deconnection de la classe ConnectionProducteur pour déconnecter l'utilisateur
    ConnectionProducteur::deconnection();
}
else {
    // Sinon, on affiche un message indiquant que l'utilisateur est déjà déconnecté
    echo 'Vous êtes déjà déconnecté.';
}
?>