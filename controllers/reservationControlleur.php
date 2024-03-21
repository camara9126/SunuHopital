<?php

if (isset($_POST["ajouter"])) {
    extract($_POST);

    if (ajouterRv($nom, $tel, $email, $daterv, $heure, $message, $doctor_id)) {
        $_POST = null;
        $message = "Votre reservation a été bien faite";
        $type = "success";
    } else {
        $message = "Erreur d'ajout rendez-vous";
        $type = "danger";
    }
}

require_once("views/reservation.view.php");


?>

