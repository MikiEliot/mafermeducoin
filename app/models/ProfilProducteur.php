<?php

namespace App\models;
use App\models\DbConnector as DbConnector;
use App\models\Producteur as Producteur;

class ProfilProducteur {
    public $idUser;
    public $email;
    public $prenom;
    public $nom;
    public $motDePass;
    public $telephone;
    public $siret;


    public static function create($email, $prenom, $nom, $motDePass, $telephone, $siret) {
        $pdo = DbConnector::DbConnect();
    
        // vérifier si le SIRET existe déjà dans la table des producteurs.
        try {
            Producteur::fetchBySiret($siret);
        } catch (Exception $e) {
            throw new Exception("Siret n'existe pas.");
        }
        $hashedPassword = password_hash($motDePass, PASSWORD_DEFAULT);
        //création d'un nouveau profil producteur
        $req = $pdo->prepare('INSERT INTO profilproducteur (email, prenom, nom, motDePass, telephone, siret) VALUES (:email, :prenom, :nom, :motDePass, :telephone, :siret)');
        $req->execute([
            'email' => $email,
            'prenom' => $prenom,
            'nom' => $nom,
            'motDePass' =>  $hashedPassword, 
            'telephone' => $telephone,
            'siret' => $siret
        ]);

        // retourne le nouveau objet de profil.
        return new ProfilProducteur($email, $prenom, $nom, $motDePass, $telephone, $siret);
    }

    public static function update($idUser, $email, $prenom, $nom, $motDePass, $telephone, $siret) {
        $pdo = DbConnector::DbConnect();
        $hashedPassword = password_hash($motDePass, PASSWORD_DEFAULT);
        $req = $pdo->prepare('UPDATE profilproducteur SET idUser = :idUser, email = :email, prenom = :prenom, nom = :nom, motDePass = :motDePass, telephone = :telephone WHERE siret = :siret');
        $req->execute([
            'idUser' => $idUser,
            'email' => $email,
            'prenom' => $prenom,
            'nom' => $nom,
            'motDePass' => $hashedPassword,
            'telephone' => $telephone,
            'siret' => $siret
        ]);

        // retourne l'objet de profil mis à jour.
        return new ProfilProducteur($email, $prenom, $nom, $motDePass, $telephone, $siret);
    }

    public static function delete($idUser) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('DELETE FROM profilproducteur WHERE idUser = :idUser');
        $req->execute(['idUser' => $idUser]);

        // retourne vrai si le profil a été supprimé avec succès.
        return $req->rowCount() > 0;
    }
    public static function fetchByEmail($email) {
        $pdo =DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM profilproducteur WHERE email= :email');
        $req->execute(['email' => $email]);
        $res = $req->fetch($pdo::FETCH_ASSOC);

        if ($res === false) {
            return "Profil n'a pas éte trouvé";
        }
        else {
            return $res;
        }
    }
}

?>

