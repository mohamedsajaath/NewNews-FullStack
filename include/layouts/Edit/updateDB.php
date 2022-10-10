

<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>


<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>


<?php

$id = $_GET['id'];
$tablename = $_GET['tablename'];
$subUpName = mysqli_real_escape_string($connection, $_POST['name']);
$subUpPosition = $_POST['position'];
$content = mysqli_real_escape_string($connection, $_POST['content']);
if ($_POST['flexRadioDefault'] == "off") {
    $visible = 0;
} else if ($_POST['flexRadioDefault'] == "on") {
    $visible = 1;
}
$link = mysqli_real_escape_string($connection, $_POST['link']);

$name = $_FILES['subImg']['name'];
$tmpName = $_FILES['subImg']['tmp_name'];
$uploadLocation = "../../images/news/";

// Image Upload


if ($name !== "") {
    // echo "<script> alert('');</script>";
    $imageExtension = PATHINFO($name, PATHINFO_EXTENSION);
    $allowedExt = array("jpg", "png");
    if (in_array($imageExtension, $allowedExt)) {
        $imageNewName = "/" . uniqid() . "." . $imageExtension;
        move_uploaded_file($tmpName, $uploadLocation . $imageNewName);
    } else {
        echo "<script>";
        echo 'setTimeout(function(){
                location.href="../../../public/manage_web_content.php";
                alert("' . $imageExtension . 'Type Of File Not Allowed");
                    },100);';
        echo "</script>";
        die();
    }
}
?>

<!-- CHECK FOR ERROR-->
<script>
    <?php
    if ($subUpName == "" || $subUpPosition == "" || $content == "" || $link == "") {
        echo 'setTimeout(function(){
        location.href="../../../public/manage_web_content.php";
        alert("204 No Content");
            },100);
            ';
        echo ' document.getElementById("img").style.display="none";';
    } else {
        echo 'setTimeout(function(){
        location.href="../../../public/manage_web_content.php";
            },100)';
    }
    ?>
</script>

<!-- IF ERROR DIE-->
<?php
if ($subUpName == "" || $subUpPosition == "" || $content == "" || $link == "") {
    die("");
}
$update = "";
if ($name !== "") {
    $update = "UPDATE $tablename 
    SET menu_name='$subUpName',position=$subUpPosition,visible=$visible,content='$content',link='$link',images='$imageNewName'
    WHERE id=$id;";
} else {
    $update = "UPDATE $tablename 
        SET menu_name='$subUpName',position=$subUpPosition,visible=$visible,content='$content',link='$link'
        WHERE id=$id;";
}
mysqli_query($connection, $update);
?>