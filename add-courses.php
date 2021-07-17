<!DOCTYPE html>
<html dir="ltr" lang="pl-PL">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Grape(s) Comp.">
        <meta name="description" content="Dodaj Kursy - Grapes(s)">
        <meta name="keywords" content="Grape, Grapes, projekt, przyszlosc szkolnictwa, dodawanie kursu, kurs">
        <title>Grape(s).com - dodaj kurs</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Overlock+SC&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include_once "includes/teacher/upper-menu.php";
        ?>
        <header class="header-login">Dodawanie kursu:</header>
        <section class="add-courses-container">
            <table class="add-courses-table">
                <thead>
                    <caption>Dodaj kurs:</caption>
                    <tr>
                    <th>Przedmiot:</th>
                    <th>Klasa/Klasy:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="add-courses-table-items">
                            <input type="checkbox" id="checkboxChemia"/>
                            <label for="checkboxChemia">Chemia</label>
                        </td>
                        <td class="add-courses-table-items"><input type="checkbox"/>1A </td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"><input type="checkbox"/>Fizyka</td>
                        <td class="add-courses-table-items"><input type="checkbox"/>1B</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"><input type="checkbox"/>Język Angielski</td>
                        <td class="add-courses-table-items"><input type="checkbox"/>1C</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"><input type="checkbox"/>Matematyka</td>
                        <td class="add-courses-table-items"><input type="checkbox"/>2A</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"><input type="checkbox"/>Wychowanie Fizyczne</td>
                        <td class="add-courses-table-items"><input type="checkbox"/>2B</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"></td>
                        <td class="add-courses-table-items"><input type="checkbox"/>2C</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"></td>
                        <td class="add-courses-table-items"><input type="checkbox"/>3A</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"></td>
                        <td class="add-courses-table-items"><input type="checkbox"/>3B</td>
                    </tr>
                    <tr>
                        <td class="add-courses-table-items"></td>
                        <td class="add-courses-table-items"><input type="checkbox"/>3C</td>
                    </tr>
                </tbody>
            </table>
            <button class="button-submit" type="submit">Dodaj</button>
        </section>
    </body>
</html>
