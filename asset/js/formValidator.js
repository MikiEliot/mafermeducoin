function CpVilleListener() {
    // On récupère l'élément HTML du menu déroulant "codePostalOuVille" et l'élément HTML de la barre de recherche
    let codePostalOuVille = document.getElementById('codePostalOuVille');
    let rechercher = document.getElementById('search-bar');

    // On ajoute un écouteur d'événement sur le menu déroulant "codePostalOuVille" pour le changement de sélection
    codePostalOuVille.addEventListener('change', function () {
        // Si l'option "codePostal" est sélectionnée, on change la valeur du champ 
        //pattern de la barre de recherche en regex qui accepte uniquement 5 chiffres
        if (this.value === 'codePostal') {
            rechercher.pattern = '[0-9]{5}';
            rechercher.title = 'Veuillez entrer un code postal valide (5 chiffres)';
            // Si l'option "ville" est sélectionnée, on change la valeur du champ pattern de la 
            // barre de recherche en regex qui accepte uniquement 3 à 20 lettres
        } else if (this.value === 'ville') {
            rechercher.pattern = '[a-zA-Z]{3,20}'
            rechercher.title = 'Veuillez entrer une ville valide (3 à 20 lettres)';
        }
    });

    // On ajoute un écouteur d'événement sur le formulaire pour vérifier que la valeur saisie correspond au pattern avant de soumettre le formulaire
    document.querySelector('form').addEventListener('submit', function (event) {
        if (!rechercher.checkValidity()) {
            event.preventDefault();
            alert(rechercher.title);
        }
    });
}

// On ajoute un écouteur d'événement à la fin du chargement de la page
document.addEventListener("DOMContentLoaded", function () {
    CpVilleListener();
});
