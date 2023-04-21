<?php
namespace App\models;
use App\models\ProfilProducteur;

class ConnectionProducteur {
    
    public static function connection($email,$password) {
        // Vérifier les informations d'identification de l'utilisateur
        
        $utilisateur = ProfilProducteur::fetchByEmail($email);
        if (is_array($utilisateur) && array_key_exists('motDePass', $utilisateur) && password_verify($password, $utilisateur['motDePass'])) {
            // Si les informations d'identification sont correctes, connecter l'utilisateur 
            $_SESSION['utilisateur'] = $utilisateur;
            return $_SESSION['utilisateur'];
        } else {
            return ('mauvais email ou mot de pass');
        }
    }
    
    //methode de la decconection

    public static function deconnection() {
        session_unset();
        session_destroy();
        header('Location: ./?action=default');
        echo 'Vous avez été déconnecté.';
        exit();
    }


}
?>