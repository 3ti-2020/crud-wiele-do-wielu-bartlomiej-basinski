
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
<a class="Github"href="index.php">Do Logowania</a>
<h1>Bartłomiej Basiński gr2</h1>
<h3>Zalogowano</h3>

<?php
session_start();

if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
    unset($_SESSION['zalogowany']);
};
if(!isset($_SESSION['zalogowany'])){
?>
<form action='menu.php' method='POST'>
    <input  type='hidden' placeholder='login' name='login' value='a'>
    <input type='hidden' placeholder='password' name='pass' value='a'>
    <input class='Github' type='submit' value='Menu'>
</form>
<?php
}else{
    echo"<form  action='menu.php' method='POST'>
    <input type='hidden'  placeholder='login' name='login' value='a'>
    <input type='hidden'  placeholder='password' name='pass' value='a'>
    <input class='Github' type='submit' value='Menu'>
    
</form>";
   
}
?>

</header>
<aside>
<h2>Insert:</h2>
<form class="form" action="insert_blog.php" method="POST">
<input class="text" type="text" name="id_blog" placeholder="ID"></br>
    <input class="text" type="text" name="tytul" placeholder="Tytul"></br>
    <input class="text" type="text" name="tekst" placeholder="Treść"></br>
    
    <?php
    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
    $username="217032";
    $password="BaRtek2001";
    $dbname="bartlomiejbasinski_lib";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $result4 = $conn->query("SELECT * FROM `tagi`");
    echo("<select name='tag'>");
    while($wiersz2 = $result4->fetch_assoc()){
    echo("<option value='".$wiersz2['id']."' name='rola'>".$wiersz2['nazwa']." </option>");
}
    echo("</select>");
?>
<br>
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

$result = $conn->query("SELECT *, tagi_blog.id as id_del  FROM tagi,tagi_blog,blog WHERE blog.id = tagi_blog.id_blog and tagi_blog.id_tag = tagi.id");

    echo("<table class='table'>");
echo("<tr class='tr'>
<th class='th'>Tytuł</th>
<th class='th'>Treść</th>
<th class='th'>Tag</th>
<th class='th'>usuń</th>
</tr>");




while($row=$result->fetch_assoc()){
    
    echo("<tr class='tr'>");
    echo("<td class='td'>".$row['tytul']."</td>");
    echo("<td class='td'>".$row['tekst']."</td>");
    echo("<td class='td'>".$row['nazwa']."</td>");
    echo("<td class='td'>  <form class='form' action='delete_blog.php' method='POST'>

    <input type='hidden' name='id_del' value='$row[id_del]' placeholder='ID'></br>
    <div class='btnt'><input class='buttona' type='submit' value='Oddaj'></div> </td>");
    echo("</tr>");
}
    


echo("</table>");
    ?>

</main>
</body>
</html>
