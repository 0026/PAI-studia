<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
<?php
    require_once "funkcje.php";
    if (isSet($_POST['wyloguj'])){
        $_SESSION['zalogowany']=0;
    }
    if(isSet($_SESSION['zalogowany'])){
        if($_SESSION['zalogowany']==1)
            header("Location: user.php");
    }
    if (isSet($_POST['login'],$_POST['haslo'])){
        //echo "Przesłany login: ".$_POST['login'];
        //echo '<br>';
        //echo "Przersłane hasło: ".$_POST['haslo'];

        if(testinput($_POST['login'])==$osoba1->login && testinput($_POST['haslo'])==$osoba1->haslo){
            $_SESSION['zalogowanyImie'] =$osoba1->imieNazwisko;
            $_SESSION['zalogowany'] =1;
            header("Location: user.php");

        } else
        if(testinput($_POST['login'])==$osoba2->login && testinput($_POST['haslo'])==$osoba2->haslo){
            $_SESSION['zalogowanyImie'] =$osoba2->imieNazwisko;
            $_SESSION['zalogowany'] =1;
            header("Location: user.php");

        }

    }
    ?>

    <h1>
        Nasz System
    </h1>

    <form method="post" enctype="multipart/form-data" action="logowanie.php">
    <fieldset>
        <legend>Logowanie:</legend>
        <label for="login">Login</label><input type="text" name="login"><br />
        <label for="haslo"> Hasło:</label><input type="text" name="haslo"><br />
        <input type="submit" value="Zaloguj" name="zaloguj">
    </fieldset>
    </form>

    <form method="GET" action="cookie.php">
    <fieldset>
        <legend>Ciastka:</legend>
        <label for="czas">Czas jak długo ma ciastko być aktywne:</label>
        <input type="number" name="czas"> <input type="submit" value="Utwórz cookie" name="utworzCookie">
    </fieldset>
    </form>

    <?php
    if(isSet($_COOKIE["smaczneCiastko"])){
        echo "ciastko jeszcze jest: ".$_COOKIE["smaczneCiastko"]." ma taką warość";
    }
    ?>
</body>

</html>