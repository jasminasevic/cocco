<?php
session_start();

    $statusCode = 404;
	
	if($_SERVER['REQUEST_METHOD'] != "POST"){
		echo "You don't have access to this page";
	}
	    if(!empty($_POST['id'])){
        $id = $_POST['id'];

		include "connection.php";

		try{

            $idUser = $_SESSION['user']->id_user;
            $userVote = $_SESSION['user']->user_vote;
            
            $flag = false;
            
            if($userVote==1){
                echo $flag;
                //echo "You have already voted!";
            }
                else {

            // $insertAnswer = $conn->prepare()

                $updateUserVote = $conn->prepare("UPDATE users SET user_vote = 1 WHERE id_user = :id");
                $updateUserVote->bindParam(":id", $idUser);
                
                $userVoteUpdated = $updateUserVote->execute();
                
                
                if($userVoteUpdated){
                    
                    $query= $conn->prepare("UPDATE poll_votes SET count_votes=count_votes+1 WHERE id_vote = :id");
                    $query->bindParam(":id", $id);
    
                    $rezultat = $query->execute();
        
                    if($rezultat){
                        $_SESSION['user']->user_vote=1;
                        //echo $rezultat;
                        
                        $statusCode = 204;
                        $flag = true;
                    }
                    else{
                        $statusCode = 500;
                    }
                }
                else{
                    $statusCode = 500;
                }

            }
            echo $flag;
        
        }
		catch(PDOException $e){
            $statusCode = 500;
            echo $e->getMessage();
		}
	}
	// status_response_code($statusCode);

?>