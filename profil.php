<?php

require_once('./include/header.php');

?>



<div class="row justify-content-around py-5">
    <div class="col-md-3 text-center">
        <ul class="list-group">
            <!-- pour récupérer et afficher les informations dans le fichier session, il suffit d'appeler la session ($_SESSION['membre'] et de crocheter à l'indice voulu ['nom']) -->
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['nom'] ?></li>
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['prenom'] ?></li>
            <li class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><?= $_SESSION['membre']['email'] ?></li>
            
            
        </ul>
        <!-- deux boutons liens pour modifier ou le profil ou le mdp -->
        <!-- pour le profil, je récupère trois infos. La cible, l'id_membre et le pseudo (grace à la session en cours) -->
        <a href="?cible=profil&id_membre=<?= $_SESSION['membre']['id_membre'] ?>&pseudo=<?= $_SESSION['membre']['pseudo'] ?>" class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><i class="bi bi-pen-fill text-success"></i> Modifier mon profil</a>
        <!-- pour la modif du mdp, je n'ai besoin que de deux infos; la cible + l'id_membre -->
        <a href="?cible=mdp&id_membre=<?= $_SESSION['membre']['id_membre'] ?>" class="btn btn-outline-success text-dark my-3 shadow bg-white rounded"><i class="bi bi-pen-fill text-success"></i> Modifier mon mot de passe</a>
    </div>
</div>


























<?php

require_once('./include/footer.php');
?>