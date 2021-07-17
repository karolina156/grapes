<!DOCTYPE html>
<html dir="ltr" lang="pl-PL">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Grape(s) Comp.">
        <meta name="description" content="Kursy- Grapes(s)">
        <meta name="keywords" content="Grape, Grapes, projekt, przyszlosc szkolnictwa, oceny, wstaw ocene">
        <title>Grape(s).com - kursy</title>
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
        <header class="header-login">Twoje oceny:</header>
        <section class="container-grades">
            <table class="table-grades">
                <thead>
                    <tr>
                    <th>Przedmiot:</th>
                    <th>Oceny:</th>
                    <th>Średnia:</th>
                    </tr>
                </thead>
                <tbody>>                      
                        <td class="table-grades-items">Chemia:</td>
                        <td class="table-grades-items">1, 1, 2</td>
                    </tr>
                    <tr>
                        <td class="table-grades-items">Fizyka</td>
                        <td class="table-grades-items">2, 3+, 2</td>
                    </tr>
                    <tr>
                        <td class="table-grades-items">Język Angielski</td>
                        <td class="table-grades-items">4, 4+, 4</td>
                    </tr>
                    <tr>
                        <td class="table-grades-items">Matematyka</td>
                        <td class="table-grades-items">3, 3+</td>
                    </tr>
                    <tr>
                        <td class="table-grades-items">Wychowanie Fizyczne</td>
                        <td class="table-grades-items">5</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </body>
</html>
