<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Bartłomiej Basiński gr2</title>
    
</head>
<body>

<header>
<a class="Github"href="https://github.com/3ti-2020/crud-wiele-do-wielu-bartlomiej-basinski/tree/main">Do Gtihuba</a>   
<div><h1>Bartłomiej Basiński gr2</h1></div>
<a class="karty" href="Pytania.php">Egzamin</a>
</header>

<aside>
    <a>login: a </a>
    <a>hasło: a</a>
</aside>
<main>

<?php
session_start();

if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
    unset($_SESSION['zalogowany']);
};
if(!isset($_SESSION['zalogowany'])){
?>
<form action='menu.php' method='POST'>
    <input type='text' placeholder='login' name='login'>
    <input type='password' placeholder='password' name='pass'>
    <input class='btn' type='submit' value='zaloguj'>
</form>
<?php
}else{
    echo"<form action='menu.php' method='POST'>
    <input type='text' placeholder='login' name='login'>
    <input type='password' placeholder='password' name='pass'>
    <input class='btn' type='submit' value='zaloguj'>
</form>";
   
}
?>

</main>
</body>
</html>