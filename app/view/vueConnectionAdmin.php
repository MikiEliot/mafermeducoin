<?php
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
?>
<!-- Vue de la page connection -->
<title>Connection Admin</title>
</head>

<body>
      <main id="formConnection">
        <form method="post" action="?action=connectionAdmin">
          <div class="inputConnection">
            <input type="email" name="email" placeholder="email@example.com" required>
          </div>
          <div class="inputConnection">
            <input type="password" name="password"  placeholder="Mot de passe" required>
          </div>
          <input type="submit" name="envoyer" class="boutonConnection" value="Connection" />
        </form>
        <form method="post" action="?action=default">
            <input type="submit" name="envoyer" class="boutonConnection" value="Accueil" />
        </form>
      </main>
</body>
</html>