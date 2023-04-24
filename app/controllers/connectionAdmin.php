<?php 
use \App\models\Administrateur;

// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
if (isset($_SESSION['administrateur'])){
    session_unset();
    session_destroy();
}
// Inclusion de la partie "head" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';

// Si l'utilisateur n'est pas connecté, on inclut la vue de connexion
if (!isset($_SESSION['administrateur'])) {
    include(dirname(RACINE) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'vueConnectionAdmin.php');
}
// Si l'utilisateur soumet le formulaire de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
    // On récupère l'email et le mot de passe soumis
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // On essaie de connecter l'utilisateur en appelant la méthode connection de la classe ConnectionProducteur
    $admin = Administrateur::connection($email, $password);

    // Si la connexion échoue, on affiche un message d'erreur
    if ($admin === 'mauvais email ou mot de pass') {
        echo '<p class="bgMessage">Email ou mot de passe ne sont pas corrects</p>';
    } 
    // Sinon, on enregistre les informations de l'utilisateur dans sa session et on le redirige vers la page profil
    else{
        $_SESSION['administrateur'] = $admin;
        header("Location: ?action=backoffice");
        exit();
    }          
}
?>