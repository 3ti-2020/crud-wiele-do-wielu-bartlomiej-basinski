<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartłomiej Basiński</title>
    <link rel="stylesheet" href="style.css">
<body>
    <header><h1>Bartłomiej Basiński</h1></header>
    <main>
    <?php
            

            $servername="mysql-bartlomiejbasinski.alwaysdata.net";
            $username="217032";
            $password="BaRtek2001";
            $dbname="bartlomiejbasinski_lib";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $result = $conn->query("SELECT * FROM lib_tytul,lib_autorzy,lib_autor_tytul where lib_tytul.tytul_id = lib_autor_tytul.id_tytul and lib_autorzy.autor_id = lib_autor_tytul.id_autor");
            
            echo("<table border='1'>");
            echo("<tr>
                <td>name</td>
                <td>tytul</td>
            </tr>");
            while($wiersz = $result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$wiersz['nazwisko']."</td><td>".$wiersz['tytul']."</td>");
                echo("</tr>");
            }
            echo("</table>");
        ?> 
    </main>
    <footer><h1>footer</h1></footer>
    <aside>
    <form class='ins' action='insA.php' method='POST'>
                Dodaj Autora:
                <input type='text' name='nazwisko' >
                Dodaj Książke:
                <input type='text' name='Książka' >
                <input type='submit' value='Dodaj'>
            </form>
            
    </aside>
</body>
</html>
