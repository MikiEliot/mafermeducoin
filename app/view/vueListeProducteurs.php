<?php
// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
?>
<!-- Vue des resultats de la recherche -->
<section id="sectionListeProducteurs">
  <h1>On a trouvé <?php echo count($listeProducteurs)?> ferme(s) à votre proximité:</h1>
  <div id="mapListe"></div>
  <article class="articlesListeProducteurs">
    <?php
    if (!empty($listeProducteurs)) {
      $i = 1;
      foreach ($listeProducteurs as $producteur) {
    ?>  <form class="descriptionProducteurUniqueListe" action="./?action=producteurunique" method="POST">
        <input type="hidden" name="siret" value="<?php echo $producteur->siret; ?>">
        <button type="submit" class="resultatRechercheUnique">
        <div class="imgProducteurListe">
            <img src=".\asset\images\agriculteur.jpg" alt="agriculteur with basket full of veggies">
        </div>
        <div class="detailsProducteur">
            <p>Ferme du : <?php echo $producteur->nomProducteur ?></p>
            <p>Ville : <?php echo $producteur->ville ?></p>
            <p>Rue : <?php echo  $producteur->rue ?></p>
            <p>Code postal : <?php echo  $producteur->codePostal ?></p>
            <p>Site web : <?php echo  $producteur->website ?></p>
            <p>Horaires : <?php echo  $producteur->horaires ?></p>
        </div>
        </button>
    </form>
    <?php
      }
    } else {
      echo '<p class="zeroResultats">Voulez-vous essayer la recherche avec un autre critère ?
       <a href="./?action=default">Retour a la recherche</a></p>';

    }
    ?>
    <?php
    foreach ($listeProducteurs as $producteur) {
    $geocoder = new \OpenCage\Geocoder\Geocoder('cdf1af55582f4523ba55263998bea25b');
    try {
        $result = $geocoder->geocode($producteur->rue,$producteur->codePostal .' ' 
        . $producteur->ville, 'France', ['language' => 'fr', 'countrycode' => 'fr']);
        if ($result && $result['total_results'] > 0) {
            $first = $result['results'][0];
            $latitude = $first['geometry']['lat'];
            $longitude = $first['geometry']['lng'];
            echo "<input type='hidden' class='latitudeListe' value='$latitude' 
            data-nom='" . $producteur->nomProducteur 
            . "' data-ville='" . $producteur->ville 
            . "' data-rue='" . $producteur->rue 
            . "' data-codepostal='" . $producteur->codePostal 
            . "' data-description='" . $producteur->description . "'/>";
            echo "<input type='hidden' class='longitudeListe' value='{$longitude}'>";
        } 
    } catch (\OpenCage\Geocoder\Exception\GeocoderException $e) {
        echo "Geocoding failed: " . $e->getMessage();
    }
}
?>
  </article>
  
</section>