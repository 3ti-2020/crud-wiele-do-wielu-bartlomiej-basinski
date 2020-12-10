<?php

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql="DELETE FROM `tagi_blog` WHERE `id` = '".$_POST['id_del']."'";



mysqli_query($conn, $sql);

header("Location: blog.php");