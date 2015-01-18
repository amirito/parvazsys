<?php
session_start();
$_SESSION['login']=NULL;
unset($_SESSION);
header("Location: index.php");
?>