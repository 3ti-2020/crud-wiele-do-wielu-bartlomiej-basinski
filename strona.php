<?php
session_start();

if(!empty($_POST['login'])){
    if($_POST['login'] == 'a'){

if(isset($_POST['pass']) && $_POST['pass'] == 'a'){
    $_SESSION['zalogowany'] = 1;
}

if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] = 1){
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>Bartłomiej Basiński gr2</title>
</head>
<body>
<header>
<a class="Github"href="https://github.com/3ti-2020/crud-wiele-do-wielu-bartlomiej-basinski/tree/main">Do Gtihuba</a>
<h1>Bartłomiej Basiński gr2</h1>
<h3>Zalogowano</h3>
<a class="karty" href='index.php?akcja=wyloguj'>Wyloguj</a>
<a class="karty" href="/card/index.html"> Karty</a>
</header>
<aside>
<h2>Insert:</h2>
<form class="form" action="insert.php" method="POST">
    <input class="text" type="text" name="nazwisko" placeholder="nazwisko"></br>
    <input class="text" type="text" name="tytul" placeholder="tytul"></br>
    <input class="button" type="submit" value="Dodaj">
    </form>
</aside>

<main>
    <?php
    

    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM lib_tytul,lib_autorzy,lib_autor_tytul where lib_tytul.id_tytul  = lib_autor_tytul.id_tytul and lib_autorzy.autor_id = lib_autor_tytul.id_autor");

    echo("<table class='table'>");
echo("<tr class='tr'>
<th class='th'>Nazwisko</th>
<th class='th'>Tytul</th>
<th class='th'>Usuń</th>
</tr>");




while($row=$result->fetch_assoc()){
    
    echo("<tr class='tr'>");
    echo("<td class='td'>".$row['nazwisko']."</td>");
    echo("<td class='td'>".$row['tytul']."</td>");
    echo("<td class='td'>  <form class='form' action='delete.php' method='POST'>

    <input class='text' type='hidden' name='ID' value='$row[id_autor_tytul]' placeholder='ID'></br>
    <input class='buttona' type='submit' value='Usun'> </td>");
    
    echo("</tr>");
}
    


echo("</table>");
    ?>

</main>
</body>
</html>
<?php
}else{
    header("Location:index.php");
}
}
}else{
    header("Location:index.php");
}

?>