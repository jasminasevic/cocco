<?php

if (isset($_POST['btnSavePost'])) {

    $id_user = $_SESSION['user']->id_user;

    $result='';
    $postTitle = trim($_POST['tbPostTitle']);
    $postSummary = trim($_POST['tbPostSummary']);
    $text = trim($_POST['tbPostText']);
    $category = $_POST['ddlPostCategory'];

    $postImage = $_FILES['fPostImage'];

    $fileName = $postImage['name'];
    $fileType = $postImage['type'];
    $fileSize = $postImage['size'];
    $tmpPath = $postImage['tmp_name'];


    $errors = [];

    $reTitle = "/^[A-Z][a-z0-9\s]{2,50}$/";
    $reSummary = "/^[A-Z][a-z0-9.\ ]{5,125}$/";

    $errors = [];

    if (!preg_match($reTitle, $postTitle)) {
        $errors[] = "Title is not ok.";
    }

    if (!preg_match($reSummary, $postSummary)) {
        $errors[] = "Summary is not ok.";
    }

    if($category=="0"){
        $errors[] = "You have to select category";
    }
    if($text=="0"){
        $errors[] = "You have to add text";
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
        $newPath = "images/blog-images/" . $imageName;

        if (move_uploaded_file($tmpPath, $newPath)) {
            try {
                $imageInsert = "INSERT INTO images VALUES(null, :alt, :image_path, :small_image_path)";
                $prepareImageInsert = $conn->prepare($imageInsert);
                $prepareImageInsert->bindParam(":alt", $postTitle);
                $prepareImageInsert->bindParam(":image_path", $newPath);
                $prepareImageInsert->bindParam(":small_image_path", $newPath);

                $resultImageInsert= $prepareImageInsert->execute();
                $last_image_id = executeQuery('SELECT LAST_INSERT_ID() as last_id FROM images');
                $obj = $last_image_id[0];
                $obj_last= $obj->last_id;
                $obj_last = intval($obj_last);

               

               
                $postInsert = "INSERT INTO posts VALUES(null, :postTitle, :postText, :summary, 
                null, :id_user, :category, :lastImage)";

                $preparePostInsert = $conn->prepare($postInsert);

                $preparePostInsert->bindParam(":postTitle", $postTitle);
                $preparePostInsert->bindParam(":postText", $text);
                $preparePostInsert->bindParam(":summary", $postSummary);
                $preparePostInsert->bindParam(":id_user", $id_user);
                $preparePostInsert->bindParam(":category", $category);
                $preparePostInsert->bindParam(":lastImage", $obj_last);

                $result= $preparePostInsert->execute();

                if ($result) {
                    $result='<div class="alert alert-danger">New post has been added successfully!</div>';
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