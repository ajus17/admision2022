<?php
session_start();
if (!$_SESSION['estudiante']){
    header("Location:login.php");
    exit();
}
?>