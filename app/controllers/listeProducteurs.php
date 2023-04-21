<?php
// Importation de la classe ResultatsRecherche depuis le namespace \App\models
use \App\models\ResultatsRecherche;

// Controller des résultats de recherche

// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

// Inclusion de la partie "head" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';
?>
<title>Resultats recherche</title>
</head>
<?php 
// Inclusion de la partie "header" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.php';

// On appelle la méthode rechercher de la classe ResultatsRecherche pour récupérer la liste des producteurs correspondant à la recherche
$listeProducteurs=  ResultatsRecherche::rechercher();

if (isset($_GET['rechercher'])){
    // Si la recherche a été effectuée, on inclut la vue vueListeProducteurs qui affiche la liste des producteurs
    include (dirname(RACINE) . DIRECTORY_SEPARATOR .'app'. DIRECTORY_SEPARATOR .'view' . DIRECTORY_SEPARATOR . 'vueListeProducteurs.php');
}
else{
    // Sinon, on inclut la vueApropos qui affiche une présentation du site
    include (dirname(RACINE) . DIRECTORY_SEPARATOR .'app'. DIRECTORY_SEPARATOR .'view' . DIRECTORY_SEPARATOR . 'vueApropos.php');
}
// Inclusion de la vue footer
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR .  'footer.php';
?>
