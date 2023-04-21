document.addEventListener('DOMContentLoaded', () => {

    // créer et initialiser l'objet carte Leaflet
    let mapListe = L.map('mapListe').setView([47.6556, -2.7607], 9);

    // charger les tuiles de la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Data <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Map tiles &copy; <a href="https://carto.com/attribution">CARTO</a>'
    }).addTo(mapListe);
    // sélectionne tous les éléments HTML qui ont la classe "latitudeListe" et "longitudeListe"
    let latitudeListe = document.querySelectorAll('.latitudeListe');
    let longitudeListe = document.querySelectorAll('.longitudeListe');
    // récupère la latitude et la longitude de chaque producteur
    for (let i = 0; i < latitudeListe.length; i++) {
        let latitude = parseFloat(latitudeListe[i].value);
        let longitude = parseFloat(longitudeListe[i].value);

        if (!isNaN(latitude) && !isNaN(longitude)) {
            let producteurInfo = `
                <h3>${latitudeListe[i].dataset.nom}</h3>
                <p>Ville : ${latitudeListe[i].dataset.ville}</p>
                <p>Rue : ${latitudeListe[i].dataset.rue}</p>
                <p>Code postal : ${latitudeListe[i].dataset.codepostal}</p>
                <p>Description : ${latitudeListe[i].dataset.description}</p>
      `;
            let marker = L.marker([latitude, longitude]).addTo(mapListe);
            marker.bindPopup(producteurInfo);
        }
    }
});