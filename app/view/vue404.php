<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>
<!-- Vue de la page d'erreur -->
<title>Page 404</title>
</head>

<body>
    <main class="container">

        <section class='erreur'>
            <h1>Erreur 404</h1>
            <p>Oups! Il semblerait que la page que vous cherchez n'existe pas.
                Nous sommes désolés pour cette erreur, peut-être que vous avez mal saisi l'URL ou que la page a été
                déplacée.
                Veuillez vérifier l'URL que vous avez saisie ou revenir à la page précédente.
                Merci pour votre compréhension.
                </p>
            <a href="./?action=default"><button class="boutonRetourAccueil">Cliquer ici pour le retour à l'accueil</button></a>
            <div class="imgLogo">
            <a href="./?action=default"><img  src="./asset/images/logoMaFermeSansBg.png" alt="logo"></a>
            </div>
        </section>