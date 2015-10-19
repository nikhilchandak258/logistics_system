<?php
session_start();
unset($_SESSION['buser']);
session_destroy();
header('Location:index.php');
?>