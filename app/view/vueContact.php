<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>
<!-- Vue de la page Contact -->
<title>Contact Ma Ferme du Coin</title>
</head>

<section class="pageContact">

    <form method="post" action="?action=contact" id="formContact">
        <div class="inputContact">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="inputContact">
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="inputContact">
            <label for="societe">Société:</label>
            <input type="text" id="societe" name="societe">
        </div>
        <div class="inputContact">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="inputContact">
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <input id="envoyerContact" type="submit" value="Envoyer">
    </form>
    <article id="descriptionContact">
        <h1>Contactez nous</h1>
        <p>Bienvenue chez <em>Ma Ferme du Coin</em>, votre site en ligne dédié à la promotion et à la mise en valeur de fermiers
            et producteurs <em>agricoles locaux</em>! Si vous êtes un fermier ou un producteur agricole qui souhaite faire partie
            de notre communauté, n'hésitez pas à nous contacter pour vous inscrire. Une fois inscrit, vous pourrez
            modifier votre page personnelle pour inclure des informations sur votre ferme, vos produits et vos pratiques
            agricoles. Cette page sera accessible aux consommateurs locaux qui cherchent des produits frais et de
            qualité directement chez le producteur.</p>

        <p>Notre mission est de promouvoir l'agriculture locale et de soutenir les petits producteurs en offrant une
            plateforme en ligne facile d'accès pour les consommateurs. Si vous êtes un consommateur et que vous avez des
            questions, des suggestions ou des conseils à nous donner, n'hésitez pas à nous contacter également. Nous
            sommes là pour vous aider à trouver des produits frais et de qualité près de chez vous et pour vous
            connecter avec les producteurs locaux.</p>

        <p>Chez <em>Ma Ferme du Coin</em>, nous croyons que la transparence est importante dans l'industrie alimentaire et que
            les consommateurs ont le droit de connaître d'où viennent leurs aliments. Nous sommes fiers de travailler
            avec des producteurs qui pratiquent une agriculture <em>responsable, durable et respectueuse</em> de l'environnement.
            Nous encourageons nos producteurs à partager leurs pratiques agricoles avec leurs clients pour qu'ils
            puissent prendre des décisions éclairées lorsqu'ils achètent leurs produits.</p>

        <p>Nous sommes impatients de vous accueillir chez Ma Ferme du Coin et de vous aider à promouvoir votre ferme ou
            à trouver des produits frais et de qualité près de chez vous. N'hésitez pas à nous contacter pour toute
            question ou demande d'information.</p>
    </article>

</section>