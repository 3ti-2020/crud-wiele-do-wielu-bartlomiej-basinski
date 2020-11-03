<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartłomiej Basiński gr2</title>
    <link rel=stylesheet href="style.css">
</head>
<body>

<header>

    <h1>Bartłomiej Basiński gr2</h1>

    <a href="/card/index.html">Karty</a>
</header>

<aside>

<h1>Insert</h1> 

<form class="form" action="insert.php" method="POST">
    
    <input class="text" type="text" name="nazwisko" placeholder="nazwisko"></br>
    
    <input class="text" type="text" name="tytul" placeholder="tytul"></br>

    

    <input class="button" type="submit" value="Dodaj">
    </form>




</aside>


<nav>


<?php

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM lib_tytul,lib_autorzy,lib_autor_tytul where lib_tytul.id_tytul  = lib_autor_tytul.id_tytul and lib_autorzy.autor_id = lib_autor_tytul.id_autor");



echo("<table class='table'>");
echo("<tr class='tr'>
<th class='th'>ID</th>
<th class='th'>Nazwisko</th>
<th class='th'>Tytul</th>
<th class='th'>Usuń</th>
</tr>");




while($row=$result->fetch_assoc()){
    
    echo("<tr class='tr'>");
    echo("<td class='td'>".$row['id_autor_tytul']."</td>");
    echo("<td class='td'>".$row['nazwisko']."</td>");
    echo("<td class='td'>".$row['tytul']."</td>");
    echo("<td class='td'>  <form class='form' action='delete.php' method='POST'>

    <input class='text' type='hidden' name='ID' value='$row[id_autor_tytul]' placeholder='ID'></br>
    <input class='buttona' type='submit' value='Usun'> </td>");
    
    echo("</tr>");
}
    


echo("</table>");





?>


</nav>
    
</body>
</html>
