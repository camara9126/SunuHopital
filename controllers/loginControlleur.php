<?php

if (isset($_POST["connecter"])) {
    extract($_POST);
    $doctor = connecter($email, $password);
    if ($doctor) {
        $_SESSION["doctor"] = $doctor;
        return header("Location:?page=dashboard");
    } else {
        $message = "Email ou mot de passe incorrect";
    }
}

require_once('views/login.php');


?>