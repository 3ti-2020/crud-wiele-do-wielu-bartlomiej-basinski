<?php

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn= new mysqli($servername,$username,$password,$dbname);

$sqlGetId = "SELECT LAST_INSERT_ID()";

$sql=" INSERT INTO lib_autorzy (autor_id, nazwisko) values (NULL, '".$_POST['nazwisko']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $autorId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_tytul (id_tytul, tytul) values (NULL, '".$_POST['tytul']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $tytulId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_autor_tytul (id_autor_tytul, id_autor,id_tytul) values (NULL, $autorId, $tytulId)";

mysqli_query($conn, $sql);

header("Location:strona.php");

?>