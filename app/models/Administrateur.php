<?php
namespace App\models;
use App\models\DbConnector as DbConnector;

class Administrateur {
    
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    
    public static function connection($email, $password) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM administrateurs WHERE email = :email');
        $req->execute([':email' => $email]);
        $admin = $req->fetch($pdo::FETCH_ASSOC);

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['administrateur'] = $admin;
            return $_SESSION['administrateur'];
        } else {
            return ('mauvais email ou mot de pass');
        }
    }

}
?>