<?php

use \App\models\ProfilProducteur;

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
if (!isset($_SESSION['administrateur'])){
    header("Location: ?action=default");
    exit();
}
// Inclusion de la partie "head" de la vue
include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'head.php';

include RACINE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR  . 'vueBackOffice.php';


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $profil = ProfilProducteur::fetchByEmail($email);

    if ($profil) {?>
        <form class="rechercheProfilBack" method="POST" action="#">
            <label for="idUser">IdUser:</label>
            <input type="text" name="idUser" id="idUser" value="<?php echo $profil['idUser'] ?>" readonly>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email ?>"readonly>

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo $profil['prenom']?>">

            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="<?php echo $profil['nom'] ?>">

            <label for="motDePass">Mot de passe:</label>
            <input type="password" name="motDePass" id="motDePass">

            <label for="telephone">Telephone:</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo $profil['telephone'] ?>">

            <label for="siret">Siret:</label>
            <input type="text" name="siret" id="siret" value="<?php echo $profil['siret'] ?>" readonly>

            <button type="submit" name="enregistrer">Enregistrer</button>
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
<?php
        if (isset($_POST['enregistrer'])) {
            $idUser = htmlspecialchars($_POST['idUser']);
            $email = htmlspecialchars($_POST['email']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $motDePass = $_POST['motDePass'];
            $telephone = htmlspecialchars($_POST['telephone']);
            $siret = htmlspecialchars($_POST['siret']);

            try {
                $profil = ProfilProducteur::update($idUser, $email, $prenom, $nom, $motDePass, $telephone, $siret);
                echo 'Profil modifié avec succès.';
            } catch (Exception $e) {
                echo 'Une erreur s\'est produite lors de la modification du profil: ' . $e->getMessage();
            }
        }

        if (isset($_POST['supprimer'])) {
            $email = $_POST['email'];
            ProfilProducteur::deleteByEmail($email);
        }
    }
}
?>
    </main>
</body>

</html>