<?php

// Инициализация переменных  
    $user_login = !empty($_POST['user_login'])?$_POST['user_login']:NULL;  
    $user_password = !empty($_POST['user_password'])?$_POST['user_password']:NULL;

// Устанавливаем логин - пароль  
    $login = 'Иванов';  
    $password = 'Ракета';

// Проверка  
    if($login === $user_login && $password === $user_password)  
        echo 'Проходи!';  
    else  
        echo 'Стой, стрелять буду!';  
?>  
<form action="" method="post">  
Логин <input name="user_login" type="text"><br>  
Пароль <input name="user_password" type="password"><br>  
<input name="ok" type="submit" value="Тук-тук">  
</form>