<?php
    session_start();
    if (!isset($_SESSION["user_id"])) {
        header("Location: login.php");
        exit();
    }
?>

<h2>Selamat datang di Dashboard!</h2>
<a href="logout.php">Logout</a>  
