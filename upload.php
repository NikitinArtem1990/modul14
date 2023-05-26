<?php

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

include('users.php');


function getUsersList() {
    global $users;
    $a = count($users);
    
    for ($i = 0; $i < $a; $i++) {
    
    $idList = $users[$i]['id'];
    $idArray[$i] = $idList;
    }

    for ($i = 0; $i < $a; $i++) {
    
    $hashList = $users[$i]['password'];
    $hashArray[$i] = $hashList;
    }
return array_combine($idArray, $hashArray);
}  

function existsUser() {
global $login;
$idHashArray = getUsersList();
$newIdKeys = array_keys($idHashArray);
$a = count($idHashArray);
for ($i = 0; $i < $a; $i++) {

if ($newIdKeys[$i] == $login) {

    return $answerCheckId = true;
    break;
    }

elseif ($newIdKeys[$i] !== $login) {
    continue;
    }    
}
}

function checkPassword() {

    $checkL = existsUser();

if ($checkL == true) {
    global $login;
    global $users;
    global $password;
$a = count($users);

for($i = 0; $i < $a; $i++) {

if ($users[$i]['id'] == $login) {

$searchablePassword = $users[$i]['password'];
break;
}

}

if ($searchablePassword == sha1($password)) {

$checkP = true;
}

else {

$checkP = false;
}

if ($checkL == true && $checkP == true) {

return true;
}

else {
 
return false;
}
}
}

function checkBirthdate() {

    $checkL = existsUser();
    
    if ($checkL == true) {
    global $login;
    global $users;
    global $password;
    $a = count($users);
    
    for($i = 0; $i < $a; $i++) {
    
    if ($users[$i]['id'] == $login) {
    
    $searchableBirth = $users[$i]['birthDate'];
    return $searchableBirth;
    break;
    }
    
    }
    }
    }

function getCurrentUser() {
global $users;
global $login;
global $password;

    $currentU = checkPassword();
    
    if ($currentU == true) {
    
    return $login;
    }
    
    else {
    
    return null;
    }
    }

    


    $a = checkPassword();

    if ($a == true) {

    session_start();

    $_SESSION['auth'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['Birth'] = checkBirthdate();

   
    }

    $auth = $_SESSION['auth'] ?? null;
    
    if ($auth) {
        ?>
        // Успешный Вход
            <a href="index.php">Далее</a>
        
        <?php }



if(!$auth) { ?>

     // Ошибка Логина или Пароля
            <a href="login.php">Попробуйте ввести данные еще раз</a>

    // Возврат на старт
            <a href="main.php">Вернуться на стартовую страницу</a>
  
  <?php }
 
  ?>