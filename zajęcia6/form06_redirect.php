<?php
session_start(); 
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
$stmt = $link->prepare($sql);
$stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
$result = $stmt->execute();

if (!$result) {
    $link->close();
    $_SESSION['problem']=1;
    header("Location: form06_post.php");
}else{
    $link->close();
    $_SESSION['problem']=-1;
    header("Location: form06_get.php");
}
?>