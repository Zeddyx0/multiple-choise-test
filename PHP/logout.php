<?php
session_start();
//deletes the login cookie
if(isset($_SESSION["logged_in"])){
    unset($_SESSION["logged_in"]);
}
header("location: login.php");
?>