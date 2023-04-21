<?php

use App\models\Producteur;

// Vérification de la connexion de l'utilisateur

if (isset($_SESSION['utilisateur'])) {
  $utilisateur = $_SESSION['utilisateur'];
  if (!empty($utilisateur)) {
    $siret = $utilisateur['siret'];
    $producteur = Producteur::fetchBySiret($siret);

    // Récupération des données du formulaire
    $description = htmlspecialchars($_POST['description']);
    $website = htmlspecialchars($_POST['website']);
    $horaires = htmlspecialchars($_POST['horaires']);

    // Mise à jour des données du producteur dans la base de données
    Producteur::update($description,$website,$horaires,$siret);

    header('Location: ?action=connecte');
    exit('?action=connecte');
  } else {
    echo '<p>Producteur non trouvé</p>';
  }
} else {
  echo '<p>Veuillez vous connecter</p>';
}
?>