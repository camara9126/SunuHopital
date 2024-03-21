<?php

$title = "Mon Profil";

if (isset($_POST["editer"])) {
    extract($_POST);
    if (editerDocteur($doctor->id, $nom, $tel, $email, $specialisation)) {
        $message = "Modification avec success";
        $type = "success";
        $_SESSION["doctor"] = docteurById($doctor->id);
    } else {
        $message = "Erreur de modification";
        $type = "danger";
    }
}

require_once("themes/includes/header.php");

require_once("views/profil.php");

require_once("themes/includes/footer.php");


?>