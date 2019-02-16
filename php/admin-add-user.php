<?php

if (isset($_POST['btnSaveUser'])) {

    $result='';
    $firstName = trim($_POST['tbUserFirstName']);
    $lastName = trim($_POST['tbUserLastName']);
    $email = trim($_POST['tbUserEmail']);
    $pass = $_POST['tbUserPass'];
    $biography = $_POST['tbUserBiography'];
    $position = $_POST['tbUserPosition'];
    $active = $_POST['ddlActive'];
    $vote = $_POST['ddlVote'];
    $userRole = $_POST['ddlUserRole'];

    $userImage = $_FILES['fUserImage'];

    $fileName = $userImage['name'];
    $fileType = $userImage['type'];
    $fileSize = $userImage['size'];
    $tmpPath = $userImage['tmp_name'];

    $errors = [];

    $reName = "/^[A-Z][a-z]{2,50}$/";
    $rePassword = "/^[\S]{5,}$/";

    $errors = [];

    if (!preg_match($reName, $firstName)) {
        $errors[] = "First name is not ok.";
    }

    if (!preg_match($reName, $lastName)) {
        $errors[] = "Last name is not ok.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije ok";
    }

    if (!preg_match($rePassword, $pass)) {
        $errors[] = "Password is not ok.";
    }

    if($userRole=="0"){
        $errors[] = "You have to select role";
    }
    $allowedFormats = array("image/jpg", "image/jpeg", "image/png", "image/gif");

    if (!in_array($fileType, $allowedFormats)) {
        $errors[] = "File type is not ok.";
    }

    if ($fileSize > 3000000) { // 3.000.000B ~ 3MB
        $errors[] = "File size must be less than 3MB.";
    }

    if (count($errors) == 0) {

        $imageName = time() . $fileName;
        $newPath = "images/user-images/" . $imageName;


        if (move_uploaded_file($tmpPath, $newPath)) {
            try {
                $imageInsert = "INSERT INTO images VALUES(null, :alt, :image_path, :small_image_path)";
                $prepareImageInsert = $conn->prepare($imageInsert);
                $prepareImageInsert->bindParam(":alt", $firstName);
                $prepareImageInsert->bindParam(":image_path", $newPath);
                $prepareImageInsert->bindParam(":small_image_path", $newPath);

                $resultImageInsert= $prepareImageInsert->execute();
                $last_image_id = executeQuery('SELECT LAST_INSERT_ID() as last_id FROM images');
                $obj = $last_image_id[0];
                $obj_last= $obj->last_id;
                $obj_last = intval($obj_last);

                $pass=md5($pass);
               
                $userInsert = "INSERT INTO users VALUES(null, :firstName, :lastName, :email, 
                :pass, :biography, :position, null, '1', :lastImage, :role_id, :vote)";

                $prepareUserInsert = $conn->prepare($userInsert);

                $prepareUserInsert->bindParam(":firstName", $firstName);
                $prepareUserInsert->bindParam(":lastName", $lastName);
                $prepareUserInsert->bindParam(":email", $email);
                $prepareUserInsert->bindParam(":pass", $pass);
                $prepareUserInsert->bindParam(":biography", $biography);
                $prepareUserInsert->bindParam(":position", $position);
                $prepareUserInsert->bindParam(":lastImage", $obj_last);
                //$prepareUserInsert->bindParam(":active", $active);
                $prepareUserInsert->bindParam(":role_id", $userRole);
                $prepareUserInsert->bindParam(":vote", $vote);

                $result= $prepareUserInsert->execute();

                if ($result) {
                    $result='<div class="alert alert-danger">New user has been added successfully!</div>';
                }

            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

        } else {
            $result='<div class="alert alert-danger">File upload failed!</div>';
        }
    } else {

        $result='<div class="alert alert-danger">';
        foreach ($errors as $error) {
            $result.=  $error . "<br/>";
        }
        $result.= '</div>';

    }
}
else{
    $result='';
}


// <!-- END ADDING NEW USER -->