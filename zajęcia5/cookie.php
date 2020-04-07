<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require_once("funkcje.php");
    echo "Zalogowano<br/>";
    echo  "Jestes zalogowany jako: " . @$_SESSION['zalogowanyImie'];

    if(!isSet($_GET['czas'])){
        header("Location: index.php");
    }
    setcookie("smaczneCiastko", "jestUstalona", time() + $_GET['czas'], "/");
    echo "<br/> ciastko stworzone<br/>"
    ?>
    <a href = "index.php">cała wstecz</a>
</body>

</html>