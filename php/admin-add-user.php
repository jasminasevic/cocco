<?php

if (isset($_POST['btnSaveUser'])) {

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

    $allowedFormats = array("image/jpg", "image/jpeg", "image/png", "image/gif");

    if (!in_array($fileType, $allowedFormats)) {
        $errors[] = "File type is not ok.";
    }

    if ($fileSize > 3000000) { // 3.000.000B ~ 3MB
        $errors[] = "File size must be less than 3MB.";
    }

    if (count($errors) == 0) {

        $imageName = time() . $fileName;
        $newPath = "images/user-images" . $imageName;


        echo $imageName;
        echo $newPath;

        if (move_uploaded_file($tmpPath, $newPath)) {

            try {

                $pass=md5($pass);
               
                $userInsert = "INSERT INTO users VALUES(null, :firstName, :lastName, :email, :pass, :biography, :position, null, :active, null, :role_id, :vote)";

                $prepareUserInsert = $conn->prepare($userInsert);

                $prepareUserInsert->bindParam(":firstName", $firstName);
                $prepareUserInsert->bindParam(":lastName", $lastName);
                $prepareUserInsert->bindParam(":email", $email);
                $prepareUserInsert->bindParam(":pass", $pass);
                $prepareUserInsert->bindParam(":biography", $biography);
                $prepareUserInsert->bindParam(":position", $position);
                $prepareUserInsert->bindParam(":active", $active);
                $prepareUserInsert->bindParam(":role_id", $userRole);
                $prepareUserInsert->bindParam(":vote", $vote);

                $result= $prepareUserInsert->execute();

                if ($result) {
                    echo "New user has been added successfully!";
                }

            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

        } else {
            echo "File upload failed!";
        }
    } else {

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    }
}
?>

<!-- END ADDING NEW USER -->