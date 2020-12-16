
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style6.css'>
    <title>Bartłomiej Basiński gr2</title>
</head>
<body>
<header>
<a class="Github"href="https://github.com/3ti-2020/crud-wiele-do-wielu-bartlomiej-basinski/tree/main">Do Gtihuba</a>
<a class="Github"href="index.php">Do Logowania</a>
<h1>Bartłomiej Basiński gr2</h1>
<form action="blog1.php" method="POST">    
<?php
    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
    $username="217032";
    $password="BaRtek2001";
    $dbname="bartlomiejbasinski_lib";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $result = $conn->query("SELECT * FROM tagi");
    echo("<select name='id'>");
    while($wiersz = $result->fetch_assoc()){
    echo("<option value='".$wiersz['id']."' name='id'>".$wiersz['nazwa']." </option>");
}
    echo("</select>");
?>
<input type="submit" value="szukaj">
</form>
<a class="Github"href="blog.php">Wszystkie</a>
</header>

<main>

    <?php
 

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM tagi,tagi_blog,blog where tagi_blog.id_tag = tagi.id and blog.id = tagi_blog.id_blog and id_tag = '".$_POST['id']."'");
$result2 = $conn->query("SELECT *  FROM tagi,tagi_blog where tagi_blog.id_tag = tagi.id and id_tag='".$_POST['id']."'");

while($row=$result->fetch_assoc()){
    
    echo("<div class='post'>");
    echo("<h1 class='tytul'>".$row['tytul']."</h1>");
    echo("<div class='tag'>");
    echo("</div>");
    echo("<div class='teksty>");
    echo("<div class='tekst'>".$row['tekst']."</div>");
    echo("</div>");
    echo("</div>");
    
}



    ?>

</main>
</body>
</html>
