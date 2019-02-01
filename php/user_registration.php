<?php

include "connection.php";

if (isset($_POST["btnSubmit"])) {
    $firstName = trim($_POST['regFirstName']);
    $lastName = trim($_POST['regLastName']);
    $email = trim($_POST['regEmail']);
    $password = trim($_POST['regPass']);

    # Validacija podataka

    $reName = "/^[A-Z][a-z]{2,50}$/";
    $rePassword = "/^[A-Za-z0-9]{5,}$/";

    $errors = [];

    if (!preg_match($reName, $firstName)) {
        $errors[] = "Ime nije ok.";
    }

    if (!preg_match($reName, $lastName)) {
        $errors[] = "Prezime nije ok.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije ok";
    }

    if (!preg_match($rePassword, $password)) {
        $errors[] = "Lozinka nije ok.";
    }

    if (count($errors) > 0) {

        # Ispis gresaka nastalih u toku validacije

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    } else {
        # Ukoliko nema gresaka, upisujemo korisnika u bazu

        $upit_unos = $conn->prepare("INSERT INTO users VALUES (null, :firstName, :lastName, :email, :pass, 
        null, :title, :registration_date, 1, 2, 3, 0)");

        $title = "commentator";

        // Zamena "placeholdera" iz upita sa vrednostima
        $password = md5($password);
        
        $upit_unos->bindParam(':firstName', $firstName);
        $upit_unos->bindParam(':lastName', $lastName);
        $upit_unos->bindParam(':email', $email);
        $upit_unos->bindParam(':pass', $password);
        $upit_unos->bindParam(':title', $title);

        $d = time();
        $dateTime = date("Y-m-d H:i:s", $d); // Dohvatanje trenutnog vremena i kreiranje formata u kom se belezi DATETIME tip kolone iz baze
        $upit_unos->bindParam(':registration_date', $dateTime);

        try {
            // izvrsavanje upita

            $rezultat = $upit_unos->execute();

            if ($rezultat) {
                echo "Your account has been successfully registered. You may login now";
            } else {
                echo "Ooops... Something went wrong, please try again";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}