<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>
<!-- Vue de la page de l'accueil -->

		<section class='sectionApropos'>
			<article class="apropoContenu">
				<h1 class='titreApropos'>A propos nous</h1>
				<p>Bienvenue sur notre site dédié à faciliter la recherche
					de fermes locales près de chez vous ! Nous sommes
					convaincus que la connection entre les consommateurs
					et les producteurs locaux est essentielle pour encourager
					l'agriculture locale et offrir des produits frais et sains. </p>
				<p>L'agriculture locale est une pratique importante pour
					promouvoir une économie locale forte et durable.
					En achetant des produits locaux, vous soutenez les
					agriculteurs locaux et aidez à préserver les terres
					agricoles locales. De plus, les produits locaux sont
					souvent plus frais et de meilleure qualité que les
					produits importés de l'étranger. </p>
				<p>Notre outil de recherche facile à utiliser vous
					permet de trouver des fermes locales en quelques clics.
					Il suffit de saisir votre emplacement et de parcourir les
					fermes de la région pour trouver celles qui offrent les
					produits que vous recherchez. Vous pouvez également filtrer
					les résultats de recherche en fonction de vos préférences
					alimentaires, telles que les produits biologiques, les viandes
					locales, les fruits et légumes de saison, et bien plus encore. </p>
				<p>Nous sommes passionnés par l'agriculture locale et nous nous
					efforçons de faciliter la connection entre les consommateurs
					et les producteurs locaux. Nous croyons que chaque achat
					local est un vote pour soutenir l'agriculture locale et une
					économie locale forte et durable. Nous sommes fiers d'aider
					à promouvoir une agriculture locale saine et durable en connectant
					les consommateurs avec les producteurs locaux. </p>
				<p>Nous espérons que notre site vous sera utile dans votre
					recherche de fermes locales et de produits frais.
					N'hésitez pas à nous contacter si vous avez des questions ou des commentaires.
					Merci de nous avoir choisis pour faciliter
					votre expérience d'achat de produits locaux frais et sains. </p>
				</article>
			<aside class="imageApropos">
				<img src="./asset/images/lesSalades.jpg" alt="salade-verte">
				<img src="./asset/images/detail-rice-plant-sunset-valencia-with-plantation-out-focus-rice-grains-plant-seed.jpg" alt="rice plant">
			</aside>
		</section>