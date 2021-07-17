<?php
    session_start();

    if(!isset($_SESSION["username"])) {
        header("location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="pl-PL">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Grape(s) Comp.">
        <meta name="description" content="Grape(s).com - strona główna">
        <meta name="keywords" content="Grape, Grapes, projekt, przyszlosc szkolnictwa, strona główna">
        <title>Grape(s) - strona główna</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;600&family=Overlock+SC&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    </head>
    <body>
       <?php
            include_once "includes/teacher/upper-menu.php";
            echo("<p style='text-align: center;'>Cześć ".$_SESSION["username"]."!</p>");
        ?>

        <header class="page-header">
            Dużo by pisać
        </header>
    </body>
</html>