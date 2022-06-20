<?php
 session_start();
 unset($_SESSION['home.php']);
 session_destroy();
 header('location: login.php');
?>