<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    if(isSet($_FILES['image']['name'])){
        $currentDir = getcwd();
        $fileName= $_FILES['image']['name'];
        if(move_uploaded_file($_FILES['image']['tmp_name'],$currentDir."\\".$fileName)){
            echo "zapisano plik<br/>";
        }
    }
    if (isset($_SESSION['zalogowany'])) {
        if ($_SESSION['zalogowany'] != 1)
            header("Location: index.php");
    } else {
        header("Location: index.php");
    }
    require_once("funkcje.php");
    echo "Zalogowano<br/>";
    echo  "Jestes zalogowany jako: " . $_SESSION['zalogowanyImie']
    ?>

    <form method="POST" action="index.php">
        <input type="submit" value="wyloguj" name="wyloguj">
    </form>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="slij">
    </form>

    <img src="1.jpg" alt="obrazek nie został jeszcze przesłany">
</body>

</html>