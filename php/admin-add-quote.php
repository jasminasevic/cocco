<?php

include "connection.php";
// $statusCode = 404;
    
if (isset($_POST["btnSaveQuote"])) {

    $quoteText = trim($_POST['quoteText']);
    $quoteAuthor = trim($_POST['quoteAuthor']);
    $quoteCategory = $_POST['quoteCategory'];

    # Validacija podataka

    $reQuoteAuthor = "/^[A-z0-9-_?!\s\']{5,255}$/";

    $errors = [];

    if($quoteText==""){
        $errors[] = "You have to add quote content.";
    }

    if (!preg_match($reQuoteAuthor, $quoteAuthor)) {
        $errors[] = "Author name is not ok.";
    }

    if ($quoteCategory=="0") {
        $errors[] = "Category has to be selected";
    }

    if (count($errors) > 0) {

        foreach ($errors as $error) {
            echo $error . " ";
        }

    } else { 

        $query = $conn->prepare("INSERT INTO quotes VALUES (null, :quoteText, :author, :category)");


        $query->bindParam(':quoteText', $quoteText);
        $query->bindParam(':author', $quoteAuthor);
        $query->bindParam(':category', $quoteCategory);

        try {
            // izvrsavanje upita
            $result = $query->execute();            

            if ($result) {
                echo "Quote added";
                // $statusCode = 204;
                // status_response_code($statusCode);
            } else {
                echo "Error. Please try again";
                // $statusCode = 500;
            }
        } catch (PDOException $e) {
            $statusCode = 500;
            echo $e->getMessage();
        }
        
    }
}
