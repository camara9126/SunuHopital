<?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=hopital", "root", "");
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }

    
    function connecter($email, $password)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM docteur 
                                WHERE email =:email AND mdp =:password");

            $req->execute([
                'email' => $email,
                'password' => $password,
            ]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function appointment()
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM appointment");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function appointmentByStatut($statut)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM appointment
                    WHERE statut =:statut");

            $req->execute([
                "statut" => $statut
            ]);

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function appointmentById($id)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM appointment
                    WHERE id =:id");

            $req->execute([
                "id" => $id
            ]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function docteurs()
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM docteur
            ORDER BY nom ASC");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function docteurById($id)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM docteur
            WHERE id =:id");

            $req->execute(["id" => $id]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function specialisations()
    {
        global $db;
        try {
            $req = $db->prepare("SELECT * FROM specialisation ORDER BY nom ASC");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function rvByStatut($statut)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT  a.id as id, a.doctor_id as doctor_id,a.tel as tel,a.nom as nom,a.email as email, a.daterv as daterv, a.heure as heure,a.statut as statut,a.nom as nomdoc
            FROM appointment a, docteur d
            WHERE (a.doctor_id = d.id AND a.statut = :statut )
            ORDER BY daterv DESC");

            $req->execute([
                'statut' => $statut
            ]);

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function rvByTel($tel)
    {
        global $db;
        try {
            $req = $db->prepare("SELECT  a.id as id, a.doctor_id as doctor_id,  a.tel as tel, a.nom as nom, a.email as email, a.daterv as daterv, a.heure as heure, a.statut as statut, a.nom as nomdoc
            FROM appointment a, docteur d
            WHERE a.doctor_id = d.id AND a.tel = :tel
            ORDER BY daterv DESC");

            $req->execute([
                'tel' => $tel
            ]);

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function ajouterRv($nom, $tel, $email, $daterv, $heure, $message, $doctor_id)
    {
        global $db;
        try {
            $req = $db->prepare("INSERT INTO appointment(nom, tel, email, daterv,heure, message, doctor_id)
                                 VALUES(:nom, :tel, :email, :daterv, :heure, :message, :doctor_id)");
            return $req->execute([
                'nom' => $nom,
                'tel' => $tel,
                'email' => $email,
                'daterv' => $daterv,
                'heure' => $heure,
                'message' => $message,
                'doctor_id' => $doctor_id,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function editerRv($id, $nom, $tel, $email, $daterv, $heure, $message, $doctor_id, $statut)
    {
        global $db;
        try {
            $req = $db->prepare("UPDATE appointment 
            SET nom =:nom, tel =:tel, email =:email, daterv =:daterv,heure =:heure, message =:message, doctor_id =:doctor_id, statut =:statut
                    WHERE id =:id");
            return $req->execute([
                'nom' => $nom,
                'tel' => $tel,
                'email' => $email,
                'daterv' => $daterv,
                'heure' => $heure,
                'message' => $message,
                'doctor_id' => $doctor_id,
                'statut' => $statut,
                'id' => $id,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function ajouterDocteur($nom, $tel, $email, $specialisation, $mdp)
    {
        global $db;
        try {
            $req = $db->prepare("INSERT INTO docteur(nom, tel, email, specialisation, mdp)
                                VALUES(:nom, :tel, :email, :specialisation, :mdp)");
            return $req->execute([
                'nom' => $nom,
                'tel' => $tel,
                'email' => $email,
                'specialisation' => $specialisation,
                'mdp' => $mdp,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function editerStatutRv($id, $statut)
    {
        global $db;
        try {
            $req = $db->prepare("UPDATE appointment SET statut =:statut
            WHERE id=:id");
            return $req->execute([
                'id' => $id,
                'statut' => $statut,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function editerDocteur($id, $nom, $tel, $email, $specialisation)
    {
        global $db;
        try {
            $req = $db->prepare("UPDATE docteur SET nom =:nom, tel =:tel, email =:email, specialisation =:specialisation
            WHERE id=:id");
            return $req->execute([
                'id' => $id,
                'nom' => $nom,
                'tel' => $tel,
                'email' => $email,
                'specialisation' => $specialisation,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function supprimerDocteur($id)
    {
        global $db;
        try {
            $req = $db->prepare("DELETE FROM docteur WHERE id =:id");
            return $req->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function supprimerRv($id)
    {
        global $db;
        try {
            $req = $db->prepare("DELETE FROM appointment WHERE id =:id");
            return $req->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    function estAdmin($email)
    {
        return $email === "admin@gmail.com";
    }


?>