"DELETE FROM `lib_aut_tyt` WHERE `lib_aut_tyt`.`id_autor_tytul` = 9"?

<?php

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql="DELETE FROM `lib_autor_tytul` WHERE `lib_autor_tytul`.`id_autor_tytul` = '".$_POST['ID']."'";



mysqli_query($conn, $sql);

header("Location:index.php");