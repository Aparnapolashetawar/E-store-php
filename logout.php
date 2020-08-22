<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: loginpage.php');
}
session_destroy();
header('location: homepage.php');
?>