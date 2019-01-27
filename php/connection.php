<?php
    $host = getenv("HOST");
    $database = getenv("DATABASE");
    $username = getenv("USERNAME");
    $password = getenv("PASSWORD");

    try{
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(PDOEXCEPTIONS $e){
        echo $e->getMessage();
    }
    
    function executeQuery($upit){
        global $conn;
        $result = $conn->query($upit)->fetchAll();
        return $result;
    }