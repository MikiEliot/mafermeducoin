<!-- Vue de la producteur séléctioné -->

    <section class="producteurUnique">
      <div class="imgProducteurUnique">
        <img src="./asset/images/apples.jpg" alt="apple orchard">
      </div>
      <div class="descriptionProducteurUnique">
        <p><?php echo "Férme : " . $producteur->nomProducteur ?></p>
        <p><?php echo "Ville : " . $producteur->ville ?></p>
        <p><?php echo "Rue : " . $producteur->rue ?></p>
        <p><?php echo "Code postal : " . $producteur->codePostal ?></p>
        <p><?php echo "Description : " . $producteur->description ?></p>
        <p><?php echo "Site web : " . $producteur->website ?></p>
        <p><?php echo "Horaires : " . $producteur->horaires ?></p>
      </div>
      <div id="mapid"></div> 
    </section>



<?php 
$geocoder = new \OpenCage\Geocoder\Geocoder('cdf1af55582f4523ba55263998bea25b');
$result = $geocoder->geocode($producteur->rue,$producteur->codePostal .' '. $producteur->ville, 'France', ['language' => 'fr', 'countrycode' => 'fr']);

if ($result && $result['total_results'] > 0) {
  $first = $result['results'][0];
  $latitude = $first['geometry']['lat'];
  $longitude = $first['geometry']['lng'];
  echo "<input type='hidden' id='latitude' value='{$latitude}'>";
  echo "<input type='hidden' id='longitude' value='{$longitude}'>";
}
else {
  echo "Désolé, on ne peut pas positioner producteur sur la carte";
}
  ?>