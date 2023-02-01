<?php
session_start();
unset($_SESSION["logins"]);
unset($_SESSION["passwords"]);
$_SESSION['validasess'] = NULL;
// Por último, destrói a sessão
session_destroy();

header('location:login.php');
?>