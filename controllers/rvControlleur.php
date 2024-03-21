<?php


$aptms = appointment();
$newapts = rvByStatut(0);
$validapts = rvByStatut(1);
$rejapts = rvByStatut(2);

if (isset($_POST["editer"])) {
    extract($_POST);
    if (editerRv($id, $nom, $tel, $email, $daterv, $heure, $message, $doctor_id, $statut)) {
        $message = "La modification a été bien faite";
        $type = "success";
    } else {
        $message = "Erreur de modification de rendez-vous";
        $type = "danger";
    }
}

if (isset($_GET["valid"])) {
    if (editerStatutRv($_GET["valid"], 1)) {
        return header("Location: ?page=rv&type=approuve");
    }
}

if (isset($_GET["rejet"])) {
    if (editerStatutRv($_GET["rejet"], 2)) {
        return header("Location: ?page=rv&type=rejete");
    }
}

if (isset($_GET["delete"])) {
    if (supprimerRv($_GET["delete"])) {
        return header("Location:?page=rv&type=new");
    }
}

if (isset($_GET["info"])) {
    $rv = appointmentById($_GET["info"]);
}

require_once("themes/includes/header.php");

if ($_GET["type"] == "approuve") {
    $title = "Approuvés";

    require_once("views/rendez-vous/approuve.php");
} else if ($_GET["type"] == "rejete") {
    $title = "Rejetés";

    require_once("views/rendez-vous/rejete.php");
} else {
    $title = "Nouveaux";

    require_once("views/rendez-vous/nouveau.php");
}


require_once("themes/includes/footer.php");


?>