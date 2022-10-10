<!-- DATABASE CONNECT -->
<?php require_once("./database_connection.php") ?>
<!-- DATABASE QUERY CONNECT -->
<?php include("../queries/adminsquery.php") ?>

<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "./../functions.php"); ?>
<?php
// CONNNECTION CONFIRMATION
confirm_connection($connection);
confirm_query($adminresult);
?>


<?php session_start(); ?>
<!-- want to change for database query -->
<?php
$user=$_POST['username'];
$passw=$_POST['password'];

$username =mysqli_real_escape_string($connection,$user);
$password = md5(mysqli_real_escape_string($connection,$passw));

$adminquery = "SELECT * FROM admins WHERE user_name='$username' AND hashed_password='$password'";
$adminresult = mysqli_query($connection, $adminquery);
echo "<pre>";
print_r($adminresult->num_rows);
echo "<pre>";

if ($adminresult -> num_rows == 1) {
    $_SESSION["login"] = "true";
    echo '<script>';
    echo 'setTimeout(function(){
                             location.href="../../public/admin.php?msg=login succeed";                   
                            },1000);';
    echo '</script>';
    return;
}

$_SESSION["login"] = "false";
echo '<script>';
echo 'setTimeout(function(){
                location.href="../../public/index.php?msg=login failed";                   
                },100);';
echo '</script>';
return;

sleep(1000);

?>


<!-- DATABASE FREE RESULT -->
<?php
mysqli_free_result($adminresult);

?>

<!-- DATABASE CLOSE -->
<?php
mysqli_close($connection)
?>