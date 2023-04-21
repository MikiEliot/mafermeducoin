<?php 
// Importation de la classe ContactMessages depuis le namespace \App\models
use \App\models\ContactMessages;

// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

// Inclusion de la partie "head" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';
?>
<title>Contact</title>
</head>
<?php 
// Inclusion de la partie "header" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.php';

// Si le formulaire de contact est soumis en méthode POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // On récupère les données du formulaire et on les nettoie
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $societe = htmlspecialchars($_POST['societe']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    try {
        // On insère le message dans la base de données via la méthode insert de la classe ContactMessages
        $result = ContactMessages::insert($nom,$prenom,$societe,$email,$message);
        echo $result;
        // Si l'insertion échoue, on lance une exception
        if (!$result) {
            throw new Exception('Message not sent.');
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

// Inclusion de la vue de formulaire de contact
include (dirname(RACINE) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'vueContact.php');

// Inclusion de la partie "footer" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR .  'footer.php';

?>