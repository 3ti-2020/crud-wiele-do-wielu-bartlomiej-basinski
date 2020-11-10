<?php
$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn= new mysqli($servername,$username,$password,$dbname);
$sql=" INSERT INTO lib_uzytkownicy (id_uzytkownika, imie ,nazwisko) values (NULL,'".$_POST['imie']."','".$_POST['nazwisko']."' )";
header("Location:uzytkownicy.php");
mysqli_query($conn, $sql);
?>