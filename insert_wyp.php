<?php
    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
    $username="217032";
    $password="BaRtek2001";
    $dbname="bartlomiejbasinski_lib";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $ksiazka=$_POST['tytul'];
    $uzytkownik=$_POST['uzytkownik'];

    $sql = "INSERT INTO `lib_wypozyczenia`( `id_tytul`, `id_uzytkownik`, `data_wypozyczenia`, `termin_oddania`) VALUES ($ksiazka, $uzytkownik, NOW(), NOW()+INTERVAL 2 WEEK)";

    echo($sql);

    mysqli_query($conn, $sql);
    $conn->close();

header('Location: wypozyczneia.php');
?>