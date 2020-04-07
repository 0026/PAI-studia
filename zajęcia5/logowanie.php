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
        } else{
            header("Location: index.php");
        }

    }
    header("Location: index.php");
    ?>

</body>

</html>