<?php

    $statusCode = 404;
	
	if($_SERVER['REQUEST_METHOD'] != "POST"){
		echo "Ne mozete pristupiti ovoj stranici";
	}
	    if(!empty($_POST['id'])){

        $id = $_POST['id'];
		include "connection.php";

		try{
            $upit = $conn->prepare("DELETE FROM quotes WHERE id_quote = :id ");
            $upit->bindParam(":id", $id);
            $rezultat = $upit->execute();

			if($rezultat){
                $statusCode = 204;
			}
			else{
                $statusCode = 500;
            }

        }
		catch(PDOException $e){
            $statusCode = 500;
            echo $e->getMessage();
		}
	}
	// status_response_code($statusCode);

?>