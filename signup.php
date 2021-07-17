<!DOCTYPE html>
<html dir="ltr" lang="pl-PL">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="author" content="Grape(s) Comp.">
        <meta name="description" content="Grape(s).com - zarejestruj się">
        <meta name="keywords" content="Grape, Grapes, projekt, przyszlosc szkolnictwa, zaloz konto, zarejestruj sie">
        <title>Grape(s) - rejestracja</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;600&family=Overlock+SC&display=swap" rel="stylesheet">   
    </head>
    <body>
    <header class="header-login">Rejestracja</header>
        <section class="form-login-container">
            <form action="login.php" method="POST" class="form-login">
                <input class="form-login-input" type="text" name="name" placeholder="Imię">
                <input class="form-login-input" type="text" name="surname" placeholder="Nazwisko">
                <input class="form-login-input" type="email" name="email" placeholder="twoj@email.pl">
                <input class="form-login-input" type="text" name="login" placeholder="Nazwa użytkownika">
                <input class="form-login-input" type="password" name="password" placeholder="Hasło">
                <input class="form-login-input" type="password" name="passwordRepeat" placeholder="Powtórz hasło">
                <button class="form-login-button" type="submit">Zarejestruj się</button>
            </form>
        </section>
    </body>
</html>