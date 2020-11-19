
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
<form action="insert_wyp.php" method="POST" >
                            <h2>książka:</h2>
                            <?php
                            $servername="mysql-bartlomiejbasinski.alwaysdata.net";
                            $username="217032";
                            $password="BaRtek2001";
                            $dbname="bartlomiejbasinski_lib";
                            
                            $conn = new mysqli($servername, $username, $password, $dbname);
                                $result3 = $conn->query("SELECT * FROM lib_tytul,lib_autorzy,lib_autor_tytul where lib_tytul.id_tytul  = lib_autor_tytul.id_tytul and lib_autorzy.autor_id = lib_autor_tytul.id_autor");
                                echo("<select name='tytul'>");
                                while($wiersz = $result3->fetch_assoc()){
                                    echo("<option value='".$wiersz['id_autor_tytul']."' name='tytul'>".$wiersz['nazwisko']."  ".$wiersz['tytul']."</option>");
                                }
                                echo("</select>");
                            ?>
                            <h2>użytkownik:</h2>
                            <?php
                                $result4 = $conn->query("SELECT * FROM lib_uzytkownicy");
                                echo("<select name='uzytkownik'>");
                                while($wiersz2 = $result4->fetch_assoc()){
                                    echo("<option value='".$wiersz2['id_uzytkownika']."' name='uzytkownik'>".$wiersz2['imie']."  ".$wiersz2['nazwisko']."</option>");
                                }
                                echo("</select>");
                            ?>
                            <br>
                            <input type="submit" value="WYPOŻYCZ">
                        </form>
</aside>

<main>
    <?php
    

    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
$username="217032";
$password="BaRtek2001";
$dbname="bartlomiejbasinski_lib";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("select * from lib_wypozyczenia,lib_uzytkownicy,lib_tytul where lib_wypozyczenia.id_tytul = lib_tytul.id_tytul AND lib_wypozyczenia.id_uzytkownik = lib_uzytkownicy.id_uzytkownika");

    echo("<table class='table'>");
echo("<tr class='tr'>
<th class='th'>imie</th>
<th class='th'>nazwisko</th>
<th class='th'>tytul</th>
<th class='th'>data_wypozyczenia</th>
<th class='th'>termin_oddania</th>
<th class='th'>dni do oddania</th>
<th class='th'>Oddaj</th>

</tr>");




while($row=$result->fetch_assoc()){
    
    echo("<tr class='tr'>");
    echo("<td class='td'>".$row['imie']."</td>");
    echo("<td class='td'>".$row['nazwisko']."</td>");
    echo("<td class='td'>".$row['tytul']."</td>");
    echo("<td class='td'>".$row['data_wypozyczenia']."</td>");
    echo("<td class='td'>".$row['termin_oddania']."</td>");
    echo("<td class='td'>");
    echo dateDifference("2020-10-15", "2020-10-12" , $differenceFormat = '%a' );
    echo("</td>");
    echo("<td class='td'>  <form class='form' action='delete_wyp.php' method='POST'>

    <input type='hidden' name='ID' value='$row[id_wypozyczneia]' placeholder='ID'></br>
    <div class='btnt'><input class='buttona' type='submit' value='Oddaj'></div> </td>");
    
    echo("</tr>");
    
}
    
function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' ){
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
   
    $interval = date_diff($datetime1, $datetime2);
   
    return $interval->format($differenceFormat);
   
}

echo("</table>");
    ?>

</main>
</body>
</html>
