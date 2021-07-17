<?php
    session_start();

    if(isset($_SESSION["username"])) {
        header("location: homepage.php");
        exit();
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="pl-PL">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Grape(s) Comp.">
        <meta name="description" content="Grape(s).com - zaloguj się">
        <meta name="keywords" content="Grape, Grapes, projekt, przyszlosc szkolnictwa, logowanie, zaloguj sie">
        <title>Grape(s) - logowanie</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;600&family=Overlock+SC&display=swap" rel="stylesheet">  
    </head>
    <body>
        <header class="header-login">Logowanie</header>
        <section class="form-login-container">
            <form action="functionalities/login-process.php" method="POST" class="form-login">
                <input class="form-login-input" type="text" name="username" placeholder="Nazwa użytkownika">
                <input class="form-login-input" type="password" name="password" placeholder="Hasło">
                <button class="button-submit" type="submit" name="buttonSubmit">Zaloguj</button>
            </form>

            <!-- ERROR MESSAGES -->
            <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyInput")
                    echo("<p class='login-error-message'>Pola nie mogą zostać puste!</p>");
                else if($_GET["error"] == "unknownError")
                    echo("<p class='login-error-message'>Wystąpił błąd! Spróbuj ponownie.</p>");
                else if($_GET["error"] == "wrongCredentials")
                    echo("<p class='login-error-message'>Nieprawidłowe dane logowania!</p>");
            }
            ?>
        </section>
    </body>
</html>