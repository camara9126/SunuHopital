<?php

$title = "Recherche";

if (isset($_POST["rechercher"])) {
    extract($_POST);
    $rvs = rvByTel($tel);
}



require_once("themes/includes/header.php");

require_once("views/search.php");

require_once("themes/includes/footer.php");


?>