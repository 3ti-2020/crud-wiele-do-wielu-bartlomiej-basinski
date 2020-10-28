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
        <div class="php">
        <?php

            $conn= new mysqli('sql7.freemysqlhosting.net','sql7373153','jx1pxxAuGq','sql7373153');

            $res= $conn->query("select * from `bibl`.`lib_tytul` join `bibl`.`lib_autor_tytul` join `bibl`.`lib_autor` where `bibl`.`lib_tytul`.`id_tytul` = `bibl`.`lib_autor_tytul`.`id_tytul` and `bibl`.`lib_autor`.`id_autor` = `bibl`.`lib_autor_tytul`.`id_autor`");

            echo('<table border=1>
            <tr>
            <th>ID</th>
           <th>Autor</th>
           <th>Książka</th>
           <th>Del</th>
            </tr>');

            while($row=$res->fetch_assoc()){
                echo("<tr>
                <td>".$row['id_autor_tytul']."</td>
                <td>".$row['name']."</td>
                <td>".$row['tytul']."</td>
                <td>
                <form class='in' action='del.php' method='POST'>
                
                <input type='hidden' name='id_tytul' value='".$row['id_tytul']."'>
                <input type='submit' value='X'>
            </form></td>                
                </tr>");
            };

            echo('</table>');

            ?>
        </div>
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
