<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>

<!-- Vue de la page Blog -->

<section class="sectionBlog">
    <div class="imageBlog">
        <img src="./asset/images/sunny-meadow-landscape.jpg" alt="sunny meadow landscape">
        <img src="./asset/images/apples.jpg" alt="apples">
        <img src="./asset/images/trees.jpg" alt="trees in the fields">
    </div>
    <article class="blogContenu">
        <h1 class="titreBlog">L'importance de l'agriculture locale et des circuits
            courts de production et de vente dans le développement durable</h1>

        <p>Le développement durable est une préoccupation croissante dans le monde entier.
            Les gens prennent conscience de plus en plus de l'<strong>importance de protéger
                l'environnement</strong> et de promouvoir des pratiques durables pour assurer
            un avenir viable pour les générations futures.
            L'<em>agriculture locale</em> et les <em>circuits courts de production et de vente</em> jouent
            un rôle crucial dans la promotion du développement durable.</p>

        <p>L'<em>agriculture locale</em> est une méthode de production alimentaire
            qui favorise la culture des aliments dans la région où ils seront consommés.
            Cela signifie que les aliments sont produits localement, avec un minimum de transport et
            de manipulation avant d'atteindre les consommateurs. Les <em>circuits courts de production et
                de vente</em>, quant à eux, réduisent le nombre d'intermédiaires entre le producteur et
            le consommateur final. Les producteurs vendent leurs produits directement aux consommateurs
            ou à des détaillants locaux,
            ce qui réduit les coûts de transport et de stockage.</p>
        <p>L'<em>agriculture locale</em> est une méthode de production alimentaire
            qui favorise la culture des aliments dans la région où ils seront consommés.
            Cela signifie que les aliments sont produits localement, avec un minimum de transport et
            de manipulation avant d'atteindre les consommateurs. Les <em>circuits courts de production et
                de vente</em>, quant à eux, réduisent le nombre d'intermédiaires entre le producteur et
            le consommateur final. Les producteurs vendent leurs produits directement aux consommateurs
            ou à des détaillants locaux,
            ce qui réduit les coûts de transport et de stockage.</p>
        <p>L'<em>agriculture locale</em> et les <em>circuits courts de production
            et de vente</em> ont un certain nombre d'avantages pour la durabilité
            environnementale. Tout d'abord, ils réduisent les émissions
            de gaz à effet de serre en limitant la distance parcourue par
            les aliments avant d'atteindre les consommateurs.
            Moins de transport signifie moins de carburant utilisé et moins de pollution.
            De plus, l'<em>agriculture locale</em> favorise la biodiversité,
            car les agriculteurs peuvent cultiver une variété de cultures
            adaptées à la région plutôt
            que de se concentrer sur une culture unique pour l'exportation.</p>
        <p>L'agriculture locale et les circuits courts de production et de vente ont également des avantages économiques
            pour les communautés locales. Ils créent des emplois locaux dans l'agriculture, la transformation des
            aliments et la vente au détail. Les producteurs locaux peuvent vendre leurs produits à un prix équitable, ce
            qui leur permet de réaliser des bénéfices suffisants pour maintenir leurs exploitations agricoles en
            activité. Les consommateurs peuvent acheter des aliments frais et sains produits localement, ce qui
            contribue à la santé de la communauté.</p>
        <p>Enfin, l'agriculture locale et les circuits courts de production et de vente renforcent les liens sociaux
            entre les producteurs et les consommateurs. Les producteurs peuvent interagir directement avec les
            consommateurs, ce qui crée un sentiment de communauté et renforce la confiance dans la qualité des aliments.
            Les consommateurs peuvent connaître l'origine des aliments qu'ils achètent et savoir comment ils ont été
            produits. Cela leur donne un plus grand contrôle sur leur alimentation et leur permet de faire des choix
            plus durables.</p>
        <p>En conclusion, <strong>l'agriculture locale et les circuits courts de production et de vente sont essentiels
                pour promouvoir le développement durable</strong>. Ils réduisent les émissions de gaz à effet de serre,
            favorisent la biodiversité, créent des emplois locaux, offrent des aliments frais et sains, renforcent les
            liens sociaux et renforcent la confiance dans la qualité des aliments.</p>
        <p class="auteur"><em>Author: </em>Machin Bidule</p>
        <p class="date">
            <date>12/02/2023</date>
        </p>
    </article>
</section>