//-------------Script pour menu burger----------------------- //

// Attendre le chargement complet de la page
document.addEventListener("DOMContentLoaded", function() {
    //écouteur d'événement sur le bouton du menu burger
    document.querySelector('#burgerMenu').addEventListener('click', function() {
      document.querySelector('#navBarHeader ul').classList.toggle('show');
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    //écouteur d'événement sur l'élément #navBarHeader
  document.querySelector('#navBarHeader').addEventListener('click', function() {
    document.querySelector('#navBarHeader ul').classList.toggle('show');
  });
});