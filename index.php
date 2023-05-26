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
   
</head>
<body>
<header>
<form class="checkIn" action="logOut.php">
    <button class="checkMain">Exit</button>
       </form>
       <form class="checkIn" action="cabinet.php">
    <button class="checkMain">Personal account</button>
       </form>

<h1 class="startLogo">SPA "Fairy Tale in Reality"</h1>
<h2 class="startLogoSmall">Welcome,
<span><?php
            include('name.php'); 
            echo $login; 
            ?></span>
!</h2>
<div class="logo"></div>

<div>
            
        </div>
</header>

<div class="BlockMain">
<h1 class="BlockMainLogo">Current services</h1>
<h2>1. Hot stone massage</h2>
<h2>2. Milk bath</h2>
<h2>3. Paraffin therapy</h2>
<h2>4. Body masks</h2>
<h2>5. Brazilian hair removal</h2>
<h2>6. Exposure to steam</h2>
<h2>7. Manicure and pedicure</h2>
<h2>8. Mud bath</h2>
<h2>9. Wrapping</h2>
<h2>10. Anti-cellulite massage</h2>
</div>
<div class="BlockMain">
<h1 class="BlockMainLogo">Photos</h1>
<img class="mainPhotos" src="https://images.unsplash.com/photo-1591343395082-e120087004b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2342&q=80" width="500" height="300">
<img class="mainPhotos" src="https://images.unsplash.com/photo-1552693673-1bf958298935?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2346&q=80" width="500" height="300">
<img class="mainPhotos" src="https://images.unsplash.com/photo-1583417267826-aebc4d1542e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" width="500" height="300">
<img class="mainPhotos" src="https://images.unsplash.com/photo-1529290130-4ca3753253ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2352&q=80" width="500" height="300">
<img class="mainPhotos" src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" width="500" height="300">
<img class="mainPhotos" src="https://images.unsplash.com/photo-1494194069000-cb794f31d82c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" width="500" height="300">
</div>
<div class="BlockMain">
<h1 class="BlockMainLogo">Promotions</h1>
<h2>1. Birthday discount</h2>
<h2>2. Personal discounts for each registered user</h2>
</div>

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