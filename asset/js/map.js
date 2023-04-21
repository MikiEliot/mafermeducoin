// Attendre le chargement complet de la page
document.addEventListener('DOMContentLoaded', () => {

    // créer et initialiser l'objet carte Leaflet
    let map = L.map('mapid').setView([47.6556, -2.7607], 9);

    // charger les tuiles de la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Data <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, '
      + 'Map tiles &copy; <a href="https://carto.com/attribution">CARTO</a>'
    }).addTo(map);

    let latitude = document.querySelector("#latitude").value;
    let longitude = document.querySelector("#longitude").value;
    let marker = L.marker([latitude, longitude]).addTo(map);
  });