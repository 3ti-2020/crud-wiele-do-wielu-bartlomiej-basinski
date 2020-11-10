<?php

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql="DELETE FROM `lib_wypozyczenia` WHERE `id_wypozyczneia` = '".$_POST['ID']."'";



mysqli_query($conn, $sql);

header("Location:wypozyczenia.php");