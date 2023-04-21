<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
?>

<!-- Vue de la page Inscription -->
<title>Inscription</title>
</head>

<body>
  <main id="mainInscription">
    <form id="seInscrire" method="post" action="?action=inscription">
      <div class="inputInscription">
        <input type="text" name="prenom" placeholder="prenom" value="" required>
      </div>
      <div class="inputInscription">
        <input type="text" name="nom" placeholder="nom" value="" required>
      </div>
      <div class="inputInscription">
        <input type="text" name="email" placeholder="email@example.com" required>
      </div>
      <div class="inputInscription">
        <input type="password" name="password" placeholder="Mot de passe" required>
      </div>
      <div class="inputInscription">
        <input type="text" name="telephone" placeholder="Telephone">
      </div>
      <div class="inputInscription">
        <input type="text" name="siret" placeholder="Siret" required>
      </div>
      <div class="texteCheckboxInscription">
      <label>
        <input type="checkbox" name="proprietaire" value="oui" required>
        En cochant cette case, vous garantissez par l'honneur que vous êtes le propriétaire de la ferme avec le numéro
        SIRET qui correspond à celui de notre site. Nous nous réservons le droit de prendre des mesures légales si
        nous découvrons que ces informations sont fausses ou trompeuses.
      </label>
    </div>
    <div class="boutonSinscrire">
      <button type="submit">S'inscrire</button>
    </div>
    </form>
      <div id="texteLienVersSeConnecter">
        <p>Vous avez déjà un compte?</p>
        <p><a href="./?action=connection">Se connecter</a></p>
        <p>Retour à la <a href="./?action=default">Accueil</a></p>
      </div>
  </main>
</body>

</html>