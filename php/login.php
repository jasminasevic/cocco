<?php

    session_start();
        if(isset($_POST['btnLogin'])){

            $email = $_POST['logEmail'];
            $pass = $_POST['logPassword'];

            $logErrors = [];
            $rePass = '/^[\S]{5,}$/';

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $logErrors[] = "Email is not ok";
            }
            if(!preg_match($rePass, $pass)){
                $logErrors[] = "Password is not ok";
            }
            if(count($logErrors)>0){
                $_SESSION['errors'] = $logErrors;
                header("Location: ../index.php?page=login");
            }
        else{
            require_once "connection.php";
            $pass = md5($pass);

            $query = "SELECT id_user, first_name, last_name, email, role_title, user_vote FROM users 
                INNER JOIN roles ON role_id=id_role WHERE active = 1 AND email = :email AND pass = :pass";
            
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pass", $pass);

            $stmt->execute();

            $user = $stmt->fetch();

            if($user){
                $_SESSION['user'] = $user;
                    if($_SESSION['user']->role_title=="admin"){
                        header("Location: ../index.php?page=admin");
                    }
                    else{
                        header("Location: ../index.php?page=main");
                    }
                }
            else{
                $_SESSION['errors'] = "Wrong email or password";
                header("Location: ../index.php?page=login");
            }    
        }
    }
            



    

        
       


    
        
    

