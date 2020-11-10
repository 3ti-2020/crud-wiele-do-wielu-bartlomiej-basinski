<?php
/*
$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn= new mysqli($servername,$username,$password,$dbname);

$sqlGetId = "SELECT LAST_INSERT_ID()";

$sql=" INSERT INTO lib_uzytkownicy (id_uzytkownika, imie, nazwisko) values (NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $uzytkownik = $row["LAST_INSERT_ID()"];
}


$sql=" INSERT INTO lib_wypozyczenia (id_wypozyczneia, id_uzytkownika ,id_tytul) values (NULL, $uzytkownik,'".$_POST['id_tylul']."' )";

mysqli_query($conn, $sql);
*/echo("duofh");
//header("Location:wypozyczneia.php");

?>