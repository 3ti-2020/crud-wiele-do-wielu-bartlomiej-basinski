<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/4fb762f9bd.js" crossorigin="anonymous"></script>
</head>
<body>
<header><?php
session_start();

if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
    unset($_SESSION['zalogowany']);
};
if(!isset($_SESSION['zalogowany'])){
?>
<form action='../menu.php' method='POST'>
    <input  type='hidden' placeholder='login' name='login' value='a'>
    <input type='hidden' placeholder='password' name='pass' value='a'>
    <input class='Github' type='submit' value='Menu'>
</form>
<?php
}else{
    echo"<form  action='../menu.php' method='POST'>
    <input type='hidden'  placeholder='login' name='login' value='a'>
    <input type='hidden'  placeholder='password' name='pass' value='a'>
    <input class='Github' type='submit' value='Menu'>
</form>";
   
}
?></header>
<main>
    <div class="cont">
    <div class="calosc">
    <div class="card1">
      <div class="niebieskie">
      </div>
      <div class="card">
        <div class="gorny">
          <h2></h2>
        
        <p class="cena"> </p>
        </div>
        <div class="ukryty">
          <div class="kwadraty">
          <div class="kwadrat a"><b></b></div>
          <div class="kwadrat b"><b></b></div>
          <div class="kwadrat c"><b></b></div>
          </div>
          <div class="tekstowy">
            <p class="wiado"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="calosc">
    <div class="card2">
      <div class="niebieskie">
      </div>
      <div class="card">
        <div class="gorny">
          <h2></h2>
        
        <p class="cena"></p>
        </div>
        <div class="ukryty">
          <div class="kwadraty">
          <div class="kwadrat a"><b></b></div>
          <div class="kwadrat b"><b></b></div>
          <div class="kwadrat c"><b></b></div>
          </div>
          <div class="tekstowy">
            <p class="wiado"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="calosc">
    <div class="card3">
      <div class="niebieskie">
      </div>
      <div class="card">
        <div class="gorny">
          <h2></h2>
        
        <p class="cena"></p>
        </div>
        <div class="ukryty">
          <div class="kwadraty">
          <div class="kwadrat a"><b></b></div>
          <div class="kwadrat b"><b></b></div>
          <div class="kwadrat c"><b></b></div>
          </div>
          <div class="tekstowy">
            <p class="wiado"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  

 

    </div>
    <div class="poletxt" id="text"></div>
    </main>
    <script src="script.js"></script>
</body>
</html>
