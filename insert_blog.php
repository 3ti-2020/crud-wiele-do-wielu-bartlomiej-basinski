<?php
$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn= new mysqli($servername,$username,$password,$dbname);
$sql=" INSERT INTO blog (id, tytul ,tekst) values ('".$_POST['id_blog']."','".$_POST['tytul']."','".$_POST['tekst']."')";
$sql2=" INSERT INTO tagi_blog (id, id_blog ,id_tag) values (NULL,'".$_POST['id_blog']."','".$_POST['tag']."')";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql2);
header("Location:blog.php");
?>