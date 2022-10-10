<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>


<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>

<?php
$subject_id = $_POST['subId'];
$subname = mysqli_real_escape_string($connection,$_POST['subname']);
$subposition = $_POST['subposition'];
if ($_POST['flexRadioDefault'] == "on") {
    $visible = 1;
} elseif ($_POST['flexRadioDefault'] == "off") {
    $visible = 0;
}

$name = $_FILES['subImg']['name'];
$tmpName = $_FILES['subImg']['tmp_name'];
$uploadLocation = "../../images/";

// Image Upload



$imageExtension = PATHINFO($name, PATHINFO_EXTENSION);
$allowedExt = array("jpg", "png");
if (in_array($imageExtension, $allowedExt)) {
    $imageNewName = "/" . uniqid() . "." . $imageExtension;
    move_uploaded_file($tmpName, $uploadLocation . $imageNewName);
} elseif ($name == "") {

    echo "<script>";
    echo 'setTimeout(function(){
                location.href="../../../public/manage_web_content.php";
                alert("Theres No images selected");
                    },100);';
    echo "</script>";
    die();
} else {
    echo "<script>";
    echo 'setTimeout(function(){
            location.href="../../../public/manage_web_content.php";
            alert("' . $imageExtension . 'Type Of File Not Allowed");
                },100);';
    echo "</script>";
    die();
}




?>


<!-- CHECK FOR ERROR -->
<script>
    <?php
    if ($subject_id == "" || $subname == "" || $subposition == "") {
        echo 'setTimeout(function(){
                location.href="../../../public/manage_web_content.php";
                alert("204 No Content");
                    },100);';
    } else {
        echo 'setTimeout(function(){
                location.href="../../../public/manage_web_content.php";
                    },100)';
    }
    ?>
</script>



<!-- IF ERROR DIE-->
<?php
if ($subject_id == "" || $subname == "" || $subposition == "") {
    die("");
}
$addNewRow = "INSERT INTO subjects(id,menu_name,position,visible,subject_id,images) VALUE ($subposition,'$subname',$subposition,$visible,$subject_id,' $imageNewName ');";
$result = mysqli_query($connection, $addNewRow);
?>


<!-- DATABASE CLOSE -->
<?php
mysqli_close($connection)
?>