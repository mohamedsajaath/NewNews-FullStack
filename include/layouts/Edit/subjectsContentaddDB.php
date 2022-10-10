
<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>


<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>


<?php
    $menu_name = mysqli_real_escape_string($connection,$_POST['conName']);
    $position = $_POST['conPosition'];
    $subject_id = $_POST['subID'];
    if ($_POST['flexRadioDefault'] == "on") {
        $visible = 1;
    } elseif ($_POST['flexRadioDefault'] == "off") {
        $visible = 0;
    }
    $content = mysqli_real_escape_string($connection,$_POST['content']);
    $link = mysqli_real_escape_string($connection,$_POST['link']);

    
$name = $_FILES['subImg']['name'];
$tmpName = $_FILES['subImg']['tmp_name'];
$uploadLocation = "../../images/news/";

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
    if ($menu_name == "" || $position == "" || $subject_id == "" || $content == "" || $link == "") {
        echo '';
        echo 'setTimeout(function(){
        location.href="../../../public/manage_web_content.php";
        alert("204 No Content");
            },100);';
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
    if ($menu_name == "" || $position == "" || $subject_id == "" || $content == "" || $link == "")
    {
        die("");
    }
    $insertContent = "INSERT INTO pages(subject_id,menu_name,position,visible,content,images,link) VALUE($subject_id,'$menu_name',$position,$visible,'$content','$imageNewName','$link');";
    mysqli_query($connection, $insertContent);
?>