<?php

    session_start();
    require_once('models/database.php');

    $docteurs = docteurs();
    $specs = specialisations();

    if (isset($_SESSION["doctor"])) {
        $doctor = $_SESSION["doctor"];
    } else if (isset($_GET["page"]) && $_GET["page"] != "home") {
        $_GET["page"] = "login";
    }

    
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 'login':
                require_once('controllers/loginControlleur.php');
                break;
            case 'logout':
                session_destroy();
                header("Location:?page=login");
                break;
            case 'dashboard':
                require_once('controllers/dashboardControlleur.php');
                break;
            case 'docteur':
                require_once('controllers/docteurControlleur.php');
                break;
            case 'rv':
                require_once('controllers/rvControlleur.php');
                break;
            case 'search':
                require_once('controllers/searchControlleur.php');
                break;
            case 'profil':
                require_once('controllers/profilControlleur.php');
                break;
            default:
                unset($_GET["page"]);
                return header("Location:index.php");
                break;
        }
    } else {
        require_once('partials/header.php');

        require_once('partials/navbar.php');

        require_once('views/home.view.php');

        require_once('partials/footer.php');
    }


?>