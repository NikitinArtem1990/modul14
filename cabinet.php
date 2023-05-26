<?php
session_start();

$auth = $_SESSION['auth'];

if ($auth == true) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SPA "Fairy Tale in Reality"</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
<script>  
    function timer(){   
        $.ajax({   
            url: "timer.php",   
            cache: false,   
            success: function(html){   
                $("#content").html(html);   
            }   
        });   
    }   
    $(document).ready(function(){
        timer();   
        setInterval('timer()',1000);   
    });   
</script>
<header>
<form class="checkIn" action="logOut.php">
    <button class="checkMain">Exit</button>
       </form>
       <form class="checkIn" action="index.php">
    <button class="checkMain">First page</button>
       </form>

<h1 class="startLogo">SPA "Fairy Tale in Reality"</h1>
<h2 class="AccLogoSmall">Welcome to your personal account,
<span><?php
            include('name.php'); 
            echo $login; 
            ?></span>
!</h2>

<div class="logo"></div>
<div class="container" >
    <div class="row">
      <div class="col-12">
        <h2>
            <div id="content"></div>
            <form class="PromoButton" action="cabinet.php">
    <button class="checkMainPromoButton">Take advantage of the discount</button>
       </form>

       <div class="col-12">
    <h2>Until your birthday is left:
        <?php

$birthday = $_SESSION['Birth'];

$bd = explode('.', $birthday);
$bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
$days_until = ceil(($bd - time()) / 86400);

echo $days_until;
?>
days. Birthday discount on all salon services - 25%
       </div>      


</header>

<div class="col-13">Account balance: 500 euros</div>

<footer>
<div class="copyright">Copyright (c) Spa "Fairytale in Reality" 2023</div>
</footer>
</body>
</html>

<?php }

if($auth !== true) { ?>

    // Для просмотра данной страницы нужна авторизация
           <a href="login.php">Войти</a>
 
 <?php }