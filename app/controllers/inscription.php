<?php 
use \App\models\ProfilProducteur;
use \App\models\Producteur;
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';
?>
<title>Inscription</title>
</head>



<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var(htmlspecialchars($_POST['email']), FILTER_VALIDATE_EMAIL);
    $telephone = htmlspecialchars($_POST['telephone']);
    $password = $_POST['password'];
    $siret = htmlspecialchars($_POST['siret']);

    // Vérifie si le SIRET existe dans la base de données.
    $producteur = Producteur::fetchBySiret($siret);
    if (empty($producteur)) {
        $errorMessage = "Le SIRET n'existe pas dans notre base de données. Veuillez contacter l'administrateur pour plus d'informations.";
        die($errorMessage);
    } else {
        try {
            // Ajoute un nouvel utilisateur dans la base de données.
            $utilisateur = ProfilProducteur::create(
                $email,
                $prenom,
                $nom,
                $password,
                $telephone,
                $siret
            );
            // Connecte l'utilisateur et redirige vers la page d'accueil.
            
            $_SESSION['success_message'] = "<p class='bgMessage'>Le profil a été créé avec succès ! Veuillez vous <a href='.?/action=connection'>connecter</a> pour accéder à votre compte.</p>";
            // header('Location: inscription.php');
            echo $_SESSION['success_message'];
        } catch (Exception $e) {
            $errorMessage = "<p class='bgMessage'>Le SIRET n'existe pas dans notre base de données. Veuillez contacter l'administrateur pour plus d'informations.</p>";
        }
    }
}

if (isset($errorMessage)) {
    echo '<div class="error-message">' . $errorMessage . '</div>';
}

include (dirname(RACINE) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'vueInscription.php');

?>