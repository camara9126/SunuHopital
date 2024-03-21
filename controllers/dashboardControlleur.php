<?php

$title = "Accueil";

$aptms = appointment();
$newapt = appointmentByStatut(0);
$validapt = appointmentByStatut(1);
$rejapt = appointmentByStatut(2);

require_once("themes/includes/header.php");

require_once("views/dashboard.php");

require_once("themes/includes/footer.php");


?>