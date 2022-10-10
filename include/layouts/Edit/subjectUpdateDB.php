
<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>


<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>


<?php

$subject_id = $_POST['subId'];
$id = $_GET['id'];
$subUpName = mysqli_real_escape_string($connection,$_POST['subUpName']);
$subUpPosition = $_POST['subUpPosition'];
if ($_POST['flexRadioDefault'] == "on") {
    $visible = 1;
} elseif ($_POST['flexRadioDefault'] == "off") {
    $visible = 0;
}


$name = $_FILES['subImg']['name'];
$tmpName = $_FILES['subImg']['tmp_name'];
$uploadLocation = "../../images/";

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
    if ($subject_id == "" || $subUpName == "" || $subUpPosition == "") {

        echo 'setTimeout(function(){
        location.href="../../../public/manage_web_content.php";
        alert("204 No Content");
            },100);
            alert("204 No Content")';

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
if ($subject_id == "" || $subUpName == "" || $subUpPosition == "") {
    die("");
}
$update="";
if ($name !== "") { 
    $update = "UPDATE subjects 
    SET menu_name='$subUpName',position=$subUpPosition,visible=$visible,subject_id=$subject_id,images='$imageNewName'
    WHERE id=$id;";
   
} else{
    $update = "UPDATE subjects 
    SET menu_name='$subUpName',position=$subUpPosition,visible=$visible,subject_id=$subject_id
    WHERE id=$id;";
}
mysqli_query($connection, $update);
?>