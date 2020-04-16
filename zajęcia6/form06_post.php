<?php session_start(); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
    if(isset($_SESSION['problem']) && $_SESSION['problem']==1){
        $_SESSION['problem']=0;
        echo "Nie udalo się dodać osoby";
    }
?>


    <form action="form06_redirect.php" method="POST">
        id_prac <input type="text" name="id_prac">
        nazwisko <input type="text" name="nazwisko">
        <input type="submit" value="Wstaw">
        <input type="reset" value="Wyczysc">
    </form>
    <a href="form06_get.php">Przegladaj ludzi w bazie</a>
</body>
</html>