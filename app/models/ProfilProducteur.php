<?php

namespace App\models;
use App\models\DbConnector as DbConnector;
use App\models\Producteur as Producteur;
use Exception;

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

    public static function fetchByEmail($email) {
        $pdo =DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM profilproducteur WHERE email= :email');
        $req->execute(['email' => $email]);
        $res = $req->fetch($pdo::FETCH_ASSOC);

        if ($res === false) {
            echo 'Profil n\'a pas été trouvé';
        }
        else {
            return $res;
        }
    }
    public static function fetchBySiret($siret) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM profilproducteur WHERE siret= :siret');
        $req->execute(['siret' => $siret]);
        $res = $req->fetch($pdo::FETCH_ASSOC);

        if ($res === false) {
            echo 'Profil n\'a pas été trouvé';
        }
        else {
            return new ProfilProducteur($res['email'], $res['prenom'], $res['nom'], $res['motDePass'], $res['telephone'], $res['siret']);
        }
    }

    public static function deleteBySiret($siret) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('DELETE FROM profilproducteur WHERE siret = :siret');
        $req->execute(['siret' => $siret]);

        // retourne vrai si le profil a été supprimé avec succès.
        if ($req->rowCount() > 0) {
            echo "Profil a été supprimé";
        } else {
            echo "Aucun profil n'a été supprimé";
        }
    }
    public static function deleteByEmail($email) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('DELETE FROM profilproducteur WHERE email = :email');
        $req->execute(['email' => $email]);

        // retourne vrai si le profil a été supprimé avec succès.
        if ($req->rowCount() > 0) {
            echo "Profil a été supprimé";
        } else {
            echo "Aucun profil n'a été supprimé";
        }
    }
}

?>

