
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
<form class="form" action="insert_uz.php" method="POST">
    <input class="text" type="text" name="imie" placeholder="imie"></br>
    <input class="text" type="text" name="nazwisko" placeholder="nazwisko"></br>
    
    <?php
    $servername="mysql-bartlomiejbasinski.alwaysdata.net";
    $username="217032";
    $password="BaRtek2001";
    $dbname="bartlomiejbasinski_lib";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $result4 = $conn->query("SELECT * FROM lib_role");
    echo("<select name='rola'>");
    while($wiersz2 = $result4->fetch_assoc()){
    echo("<option value='".$wiersz2['id']."' name='rola'>".$wiersz2['name']." </option>");
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

$result = $conn->query("select id_uzytkownika,imie,nazwisko,lib_role.name as role,lib_permission.name from lib_role,lib_uzytkownicy,lib_permission_role,lib_permission where lib_role.id = lib_permission_role.id_role and lib_permission.id = lib_permission_role.id_permission and lib_uzytkownicy.id_role = lib_role.id GROUP by lib_uzytkownicy.id_uzytkownika");

    echo("<table class='table'>");
echo("<tr class='tr'>
<th class='th'>imie</th>
<th class='th'>nazwisko</th>
<th class='th'>rola</th>
<th class='th'>Usuń</th>
</tr>");




while($row=$result->fetch_assoc()){
    
    echo("<tr class='tr'>");
    echo("<td class='td'>".$row['imie']."</td>");
    echo("<td class='td'>".$row['nazwisko']."</td>");
    echo("<td class='td'>".$row['role']."</td>");
    echo("<td class='td'>  <form class='form' action='delete_uz.php' method='POST'>

    <input class='text'  name='ID' type='hidden' value='$row[id_uzytkownika]' placeholder='ID'></br>
    <div class='btnt'><input class='buttona' type='submit' value='Usun'></div> </td>");
    
    echo("</tr>");
}
    


echo("</table>");
    ?>

</main>
</body>
</html>
