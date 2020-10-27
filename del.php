<?php

$conn= new mysqli('localhost','root','','bibl');

    $sql2 = "DELETE FROM `lib_tytul` WHERE lib_tytul.id_tytul =".$_POST['id_tytul']."";


    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    header('location:index.php');
?>