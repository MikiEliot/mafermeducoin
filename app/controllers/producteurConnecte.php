<?php
use App\models\Producteur;
use App\models\ConnectionProducteur;
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';
?>
<title>Profil Producteur</title>
</head>
<?php 
// Si l'utilisateur est connecté, récupérer ses informations et afficher la vue correspondante
if (isset($_SESSION['utilisateur'])) {
    $utilisateur = $_SESSION['utilisateur'];
    if (!empty($utilisateur)) {
        $siret = $utilisateur['siret'];
        $producteur = Producteur::fetchBySiret($siret);
        include (dirname(RACINE) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'vueProducteurConnecte.php');
    } else {
        echo '<p>Producteur non trouvé</p>';
    }
}

?>