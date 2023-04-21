<!-- Vue de la profil personnel d'un producteur -->



<body>
    <section id="pageProfile">
        <h1 id="headerProducteurConnecte">Bienvenue sur votre page profil</h1>
        <h2 id="sousHeaderProducteurConnecte">Ici vous pouvez modifier la description,le site web et les horaires d'ouverture de votre ferme</h2>
        <div class="producteurConnecte">
            <div id="imageProfileProducteur">
                <img src=".\asset\images\apples.jpg" alt="apple orchard">
            </div>
            <section class="descriptionProducterConnecte">
                <p><?php echo "Férme : " . $producteur->nomProducteur ?></p>
                <p><?php echo "Ville : " . $producteur->ville ?></p>
                <p><?php echo "Rue : " . $producteur->rue ?></p>
                <p><?php echo "Code postal : " . $producteur->codePostal ?></p>

            </section>
        </div>
        <section id="contenuModifiable">
            <form method="post" action="?action=update">
                <label for="description">Description:</label><br>
                <textarea name="description"><?php echo $producteur->description ?></textarea><br>

                <label for="website">Site web:</label><br>
                <input type="text" name="website" value="<?php echo $producteur->website ?>"><br>

                <label for="horaires">Horaires:</label><br>
                <input type="text" name="horaires" value="<?php echo $producteur->horaires ?>"><br>

                <input type="submit" class="boutonEnregistrer" value="Enregistrer">
            </form>
            <div id="boutonDeconnection">
                <p class="boutonDeconnecte"><a href="./?action=deconnection">Se deconnecter</a></p>
            </div>
        </div>
    </section>
</body>

</html>