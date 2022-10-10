<?php session_start() ;
if($_SESSION["login"] != "true"){
    header('location:./index.php');
    die("login ERROR"); 
}
?>