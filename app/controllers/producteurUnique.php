<?php
use App\models\Producteur;
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';
?>
<title>Page Producteur</title>
</head>

<?php 
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.php';
// producteur est récupéré en utilisant numero SIRET à l'aide de la méthode fetchBySiret()
if (isset($_POST['siret'])) {
    $siret = $_POST['siret'];
    $producteur = Producteur::fetchBySiret($siret);
} else {
    echo '<p>Producteur non trouvé</p>';
}

include (dirname(RACINE) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'vueProducteurUnique.php');

include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR .  'footer.php';

?>