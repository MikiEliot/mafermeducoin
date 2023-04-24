<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
// Module du routage
// Cette fonction redirige l'utilisateur vers une page spécifique en fonction de l'action donnée en paramètre.

function redirigeVers($action="default") {
    $lesActions = array();
    $lesActions["default"] = "listeProducteurs.php"; 
    $lesActions["liste"] = "listeProducteurs.php"; 
    $lesActions["mentionlegales"] = "mentionLegales.php"; 
    $lesActions["producteurunique"] = "producteurUnique.php"; 
    $lesActions["contact"] = "contact.php"; 
    $lesActions["blog"] = "blog.php"; 
    $lesActions["inscription"] = "inscription.php"; 
    $lesActions["connection"] = "connection.php"; 
    $lesActions["connectionAdmin"] = "connectionAdmin.php"; 
    $lesActions["backoffice"] = "backOffice.php"; 
    $lesActions["connecte"] = "producteurConnecte.php"; 
    $lesActions["update"] = "updateProducteur.php"; 
    $lesActions["deconnection"] = "deconnection.php"; 
    $lesActions["404"] = "404.php"; 

    // récupère l'action demandée, sinon rien si elle n'existe pas

    $controler_id = isset($lesActions[$action]) ? $lesActions[$action] : '';

    // redirige vers la page "404.php" si l'action n'existe pas ou si le fichier n'existe pas
    if(empty($controler_id) || !file_exists(__DIR__ . '/'. $controler_id)) {
        $controler_id = $lesActions["404"]; 
    }

    return $controler_id;
}


?>