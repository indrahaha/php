<?php 
    session_start();
    session_destroy();
    header("Location: formpenjualan.php");
?>