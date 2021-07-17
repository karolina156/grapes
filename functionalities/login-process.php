<?php

if(isset($_POST["buttonSubmit"])) {

    require_once "db.php";
    require_once "functions.php";
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(EmptyInputLogin($username, $password) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    LogIn($connection, $username, $password);

}
else {
    header("location: login.php");
    exit();
}



?>