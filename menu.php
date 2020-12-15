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
    <link rel='stylesheet' href='style3.css'>
    <title>Bartłomiej Basiński gr2</title>
</head>
<body>
<header>
<h1>Bartłomiej Basiński gr2</h1>
</header>
<aside>
<h2>Zalogowano</h2>
</aside>

<main>
<a class="Github"href="https://github.com/3ti-2020/crud-wiele-do-wielu-bartlomiej-basinski/tree/main">Do Gtihuba</a>
<a class="Github"href="index.php">Do logowania</a>
<a class="Github"href="strona.php">książki</a>
<a class="Github"href="card/index.php">karty</a>
<a class="Github"href="wypozyczneia.php">wypozyczneia</a>
<a class="Github"href="uzytkownicy.php">uzytkownicy</a>
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