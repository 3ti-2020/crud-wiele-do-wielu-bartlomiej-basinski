
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style5.css'>
    <title>Bartłomiej Basiński gr2</title>
</head>
<body>
<header>
<a class="Github"href="https://github.com/3ti-2020/crud-wiele-do-wielu-bartlomiej-basinski/tree/main">Do Gtihuba</a>
<a class="Github"href="index.php">Do Logowania</a>
<h1>Bartłomiej Basiński gr2</h1>
<h3>Zalogowano</h3>
<form>    
<input type="text" placeholder='wpisz tag'>
<input type="submit" value="szukaj">
</form>
<?php
    

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM tagi ");

while($row=$result->fetch_assoc()){
    echo("<div class='tag'>".$row['nazwa']."</div>");
}
    ?>
</header>

<main>
    <?php
    

$servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT *  FROM  blog WHERE  blog.id = 1");
$result2 = $conn->query("SELECT *  FROM tagi,tagi_blog where tagi_blog.id_tag = tagi.id and id_blog=1");
$result3 = $conn->query("SELECT *  FROM  blog WHERE  blog.id = 2");
$result4 = $conn->query("SELECT *  FROM tagi,tagi_blog where tagi_blog.id_tag = tagi.id and id_blog=2");
$result5 = $conn->query("SELECT *  FROM  blog WHERE  blog.id = 3");
$result6 = $conn->query("SELECT *  FROM tagi,tagi_blog where tagi_blog.id_tag = tagi.id and id_blog=3");

while($row=$result->fetch_assoc()){
    echo("<div class='post'>");
    echo("<h1 class='tytul'>".$row['tytul']."</h1>");
    echo("<div class='tag'>");
    while($row2=$result2->fetch_assoc()){
        echo("<div>".$row2['nazwa']."</div>");
        }
        echo("</div>");
        echo("div class='teksty");
    echo("<div class='tekst'>".$row['tekst']."</div>");
    echo("</div>");
    echo("</div>");
    
}
while($row=$result3->fetch_assoc()){
    echo("<div class='post'>");
    echo("<h1 class='tytul'>".$row['tytul']."</h1>");
    echo("<div class='tag'>");
    while($row2=$result4->fetch_assoc()){
        echo("<div>".$row2['nazwa']."</div>");
        }
        echo("</div>");
        echo("div class='teksty");
    echo("<div class='tekst'>".$row['tekst']."</div>");
    echo("</div>");
    echo("</div>");
    
}
while($row=$result5->fetch_assoc()){
    echo("<div class='post'>");
    echo("<h1 class='tytul'>".$row['tytul']."</h1>");
    echo("<div class='tag'>");
    while($row2=$result6->fetch_assoc()){
        echo("<div>".$row2['nazwa']."</div>");
        }
        echo("</div>");
    echo("div class='teksty");
    echo("<div class='tekst'>".$row['tekst']."</div>");
    echo("</div>");
    echo("</div>");
    
}


    ?>

</main>
</body>
</html>
