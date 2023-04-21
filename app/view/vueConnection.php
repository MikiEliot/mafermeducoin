<?php
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
?>
<!-- Vue de la page connection -->
<title>Connection</title>
</head>

<body>
      <main id="formConnection">
        <form method="post" action="?action=connection">
          <div class="inputConnection">
            <input type="email" name="email" placeholder="email@example.com" required>
          </div>
          <div class="inputConnection">
            <input type="password" name="password"  placeholder="Mot de passe" required>
          </div>
          <input type="submit" name="envoyer" class="boutonConnection" value="Connection" />
        </form>
        <div class="descriptionConnection">
          <p> Vous n'avez toujours pas de compte? <a href="./?action=inscription"> S'inscrire</a></p> 
          <p>Retour à la <a href="./?action=default">Accueil</a></p>
        </div>
