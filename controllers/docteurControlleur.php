<?php

$title = "Docteurs";

if (isset($_POST["ajouter"])) {
    extract($_POST);
    if (ajouterDocteur($nom, $tel, $email, $specialisation, $mdp)) {
        return header("Location:?page=docteur");
    }
}

if (isset($_POST["editer"])) {
    extract($_POST);
    $d = docteurById($id);

    if (editerDocteur($d->id, $nom, $tel, $email, $specialisation)) {
        return header("Location:?page=docteur");
    }
}

if (isset($_GET["delete"])) {
    if (supprimerDocteur($_GET["delete"])) {
        return header("Location:?page=docteur");
    }
}

if (isset($_GET["id"])) {
    $d = docteurById($_GET["id"]);
}

require_once("themes/includes/header.php");

require_once("views/docteur.php");

require_once("themes/includes/footer.php");


?>