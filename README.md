# Ma Ferme Du Coin
"Ma Ferme du Coin" est une site web qui permet aux utilisateurs de trouver des producteurs locaux dans leur région. 
Notre objectif est de mettre en valeur les avantages du circuit court en reliant directement les producteurs et les consommateurs. 
Grâce à notre site web, les utilisateurs peuvent facilement découvrir les produits frais et de qualité proposés par les producteurs locaux, 
en évitant les intermédiaires coûteux et en contribuant à soutenir l'économie locale.

# Exigences du système

Architecture MVC
Composer et le package DotENV
API OpenStreetMap, Leaflet.js et OpenCage
PHP 8.2.0
Langages de programmation : PHP, JavaScript, HTML & CSS
Pour faire fonctionner "Ma Ferme du Coin" sur votre ordinateur, vous devez installer les exigences techniques ci-dessus. 
L'architecture MVC (Modèle-Vue-Contrôleur) est utilisée pour organiser le code de manière claire et structurée. 
Composer est un gestionnaire de dépendances pour PHP, et le package DotENV est utilisé pour charger les variables d'environnement à partir d'un fichier .env. 
Les API OpenStreetMap, Leaflet.js et OpenCage sont utilisées pour la cartographie et la géolocalisation. 
Enfin, Ma Ferme du Coin a été développé en utilisant les langages de programmation PHP, SQL, JavaScript, HTML et CSS.

Pour plus d'informations sur la configuration de ces outils et bibliothèques, veuillez consulter la documentation respective de chaque technologie.

 
# Installation

Pour l'installation, on va récupérer le repo en faisant dans votre terminal :
git clone https://github.com/MikiEliot/ProjetFinal

# Installer Composer et les dependances
1. Si vous n'avez pas encore installé Composer, téléchargez et installez-le à partir de https://getcomposer.org/.
2 .Télécharger les dépendances : Ouvrez une console et naviguez jusqu'au répertoire de votre projet. Exécutez la commande composer install pour télécharger 
  les dépendances requises. Assurez-vous que les dépendances mentionnées dans le fichier composer.json sont correctement installées, notamment le package DotENV.
3. Configuration des variables d'environnement : Renommez le fichier .env.example en .env et configurez les variables d'environnement en fonction de votre 
  configuration de base de données. Les variables d'environnement définies dans ce fichier seront automatiquement chargées lors de l'exécution de l'application.
4. Créer la base de données : Importez le fichier dump.sql dans votre système de gestion de base de données pour créer la base de données et ses tables correspondantes.
5. Connexion à la base de données : Assurez-vous que les informations de connexion à la base de données dans le fichier .env sont correctes. 
  Si nécessaire, modifiez ces informations pour qu'elles correspondent à votre configuration de base de données.
6. Ouvrir l'application : Ouvrez votre navigateur web et accédez à l'URL http://localhost/mafermeducoin pour accéder à l'application.

# Utilisation 
"Ma Ferme Du Coin" est destiné aux utilisateurs soucieux de manger mieux et plus responsable en achetant des produits frais et locaux. 
Sur le site, les utilisateurs peuvent rechercher les fermes locales en utilisant soit le code postal, soit la ville.
Pour le moment, seule la région du Morbihan en Bretagne est incluse dans la version bêta du site.
Une fois que l'utilisateur a effectué la recherche, une page s'ouvre avec une carte affichant tous les producteurs locaux, 
ainsi que des blocs d'informations sur chacun des producteurs en dessous de la carte.

Le site est entièrement responsive, ce qui signifie qu'il s'adapte automatiquement à tous les types d'écrans, 
y compris les ordinateurs de bureau, les tablettes et les téléphones portables. En vue tablette et mobile, 
 n menu burger composé de trois carrotes s'affiche en millieu de la page, permettant à l'utilisateur d'accéder facilement aux différentes pages.

En cliquant sur un producteur dans la liste, une nouvelle page s'ouvre avec plus de détails sur le producteur.

En haut de la page, il y a cinq boutons: Accueil, Contact, Blog, Inscription et Connexion.
En bas de page, il y a trois liens vers la page contact, le blog et les mentions légales. 

La page d'inscription est réservée aux producteurs déjà répertoriés sur le site, 
qui peuvent s'inscrire pour ajouter plus d'informations sur leur ferme ou leur production. 
La page de connexion permet aux producteurs inscrits de se connecter et de modifier leur propre page.

L'utilisateur peut également envoyer des suggestions ou poser des questions via la page de contact.


l'utilisateur de test pour verifier si la connection fonctionne:
email: miki10@test.com 
password: miki10


# captures d'ecran 

<img src="/asset/captures_ecran/page_accueil_complet_desktop.png">
<img src="/asset/captures_ecran/resultats_recherche_desktop.png">
<img src="/asset/captures_ecran/page_accueil_complet_mobile.png">
<img src="/asset/captures_ecran/resultats_recherche_mobile_page_complet.png">





