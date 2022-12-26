<?php
    setcookie('user', $user['login'], time() - 3600, "/"); // удаляет куки
    header('Location: /lab_1/login.php'); // переадресация на главную страницу
?>
