<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>

<title>Backoffice</title>
</head>

<body>
    <main id="backoffice">
        <h1>Recherche les profils par Email</h1>
        <form class="rechercheProfilBack" action="?action=backoffice" method="post">
            <label for="email">email:</label>
            <input type="email" id="email" name="email">
            <input type="submit" value="Rechercher">
    </form>
