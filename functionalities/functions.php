<?php

function EmptyInputLogin($user, $pass) {
    if(empty($user) || empty($pass))
        return true;
    return false;
}

function UserExist($conn, $user) {
    $sql = "SELECT * FROM students WHERE login = ?;";
    $statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        header("location: ../login.php?error=unknownError");
        exit();
    }

    mysqli_stmt_bind_param($statement, "s", $user);
    mysqli_stmt_execute($statement);

    $result = mysqli_stmt_get_result($statement);

    if($row = mysqli_fetch_assoc($result)) {
        return $row;
    }
    else {
        mysqli_stmt_close($statement);
        return false;
    }
        
    mysqli_stmt_close($statement);
}

function LogIn($conn, $user, $pass) {
    $userExist = UserExist($conn, $user);

    if($userExist === false) {
        header("location: ../login.php?error=wrongCredentials");
        exit();
    }

    $passHashed = $userExist["password"];
    $checkPassword = password_verify($pass, $passHashed);

    if($checkPassword === false) {
        header("location: ../login.php?error=wrongCredentials");
        exit();
    }
    else if($checkPassword === true) {
        session_start();
        $_SESSION["username"] = $userExist["login"];
        header("location: ../homepage.php");
        exit();
    }
}


?>