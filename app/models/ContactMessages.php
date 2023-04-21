<?php 
    namespace App\models;
    use App\models\DbConnector as DbConnector;

    class ContactMessages{
        public $nomProducteur;
    public $id;
    public $nom;
    public $prenom;
    public $societe;
    public $email;
    public $message;
    public $created;

    public function __construct($id, $nom, $prenom, $societe, $email, $message,$created) {
        $this->id = $id;  
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->societe = $societe;
        $this->email = $email;
        $this->message = $message;
        $this->created = $created;
    }
    
/* Cette methode récupère tous les enregistrements de la table "producteurs" 
   dans la base de données à l'aide de la méthode PDO fetchAll(), 
   qui renvoie un tableau contenant toutes les lignes de résultat sous forme de tableau associatif. */

    public static function fetchAll() {
        $pdo =DbConnector::DbConnect();
        $req = $pdo->prepare('SELECT * FROM contact_messages');
        $req->execute();
        $result = $req->fetchAll($pdo::FETCH_ASSOC);
        $messages = [];

        foreach ($result as $row) {
            $messages[] = new ContactMessages(
                $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['societe'],
                $row['email'],
                $row['message'],
                $row['created'],
            );
        }
        return $messages;
    }

    public static function insert($nom, $prenom, $societe, $email, $message) {
        $pdo = DbConnector::DbConnect();
        $req = $pdo->prepare('INSERT INTO contact_messages (nom, prenom, societe, email, message) VALUES (?, ?, ?, ?, ?)');
        $req->execute([$nom, $prenom, $societe, $email, $message]);
        return "<p class='bgMessage'>Message envoyé!</p>";
    }
}