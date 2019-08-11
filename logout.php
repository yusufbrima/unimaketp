<?php
session_start();
unset($_SESSION['currentUser']);
unset($_SESSION['applicationToken']);
session_destroy();
header('location:login.php');
?>
