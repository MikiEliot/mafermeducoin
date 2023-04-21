<body>
    <main class="container">
        <header class="header">
            <div class="divLogo">
                <form class="formDeRecherche" action="" method="GET">
                    <p>Bienvenue dans "Ma Ferme du Coin"!
                        Veuillez trouver la ferme la plus proche en choisissant l'un des deux critères de recherche:</p>
                    <select name="codePostalOuVille" id="codePostalOuVille">
                        <option value="codePostal">Code Postal</option>
                        <option value="ville">Ville</option>
                    </select>
                    <input type="text" name="rechercher" id="search-bar" required>
                    <input type="submit" value="Rechercher" id="boutonDeRecherche">
                </form>
                <div id="logo"><img src=".\asset\images\logoMaFermeSansBg.png">
                </div>
                <div id="burgerMenu">
                    <img src="./asset/images/menu-carrotes-removebg-preview.png" alt="Menu icon">
                </div>
                <nav id="navBarHeader">
                    <ul>
                        <li><a href="./?action=default">Accueil</a></li>
                        <li><a href="./?action=contact">Contact</a></li>
                        <li><a href="./?action=blog">Blog</a></li>
                        <div class="boutonsConnection">
                            <li><a href="./?action=inscription">S'inscrire</a></li>
                            <li><a href="./?action=connection">Se connecter</a></li>
                        </div>
                    </ul>
                </nav>

            </div>


        </header>