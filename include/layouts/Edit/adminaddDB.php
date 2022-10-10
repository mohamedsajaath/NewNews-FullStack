<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>

<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>


<?php
$id = $_GET['id'];
$function = $_GET['func'];
$username = $_POST['username'];
$password = md5($_POST['password']);
?>


<!-- IF ERROR DIE-->
<?php

if ($function == "insert") {

    if (empty($username) || empty($_POST['password'])) {
        echo '<script>';
        echo 'setTimeout(function(){
        location.href="../../../public/manage_admin_user.php?msg=204 No Content";
            },1000000000000000);';
        echo ' document.getElementById("img").style.display="none";';
        echo '</script>';
        die("");
    }

    $addadmins = "INSERT INTO admins (user_name,hashed_password) VALUE ('$username','$password')";
    mysqli_query($connection, $addadmins);
} elseif ($function == "edit") {

    if (empty($username)) {
        echo '<script>';
        echo 'setTimeout(function(){
        location.href="../../../public/manage_admin_user.php?msg=204 No Content";
            },1000000000000000);';
        echo ' document.getElementById("img").style.display="none";';
        echo '</script>';
        die("");
    }

    $update = "UPDATE admins  SET user_name='$username'";
    if (!empty($_POST['password'])) {
        $update .= ", hashed_password='$password'";
    }
    $update .= " WHERE id=$id;";
    mysqli_query($connection, $update);
}

?>
<?php
sleep(5);
// header("location:../../../public/manage_admin_user.php?msg=Succeed");
?>
<!-- DATABASE CLOSE -->
<?php
mysqli_close($connection)
?>