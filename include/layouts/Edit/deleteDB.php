<!-- DATABASE CONNECT -->
<?php require_once("../database_connection.php") ?>


<!-- FUNCTIONS INCLUDE -->
<?php include(dirname(__FILE__) . "/../../functions.php"); ?>
<?php confirm_connection($connection); ?>


<?php
$id = $_GET['id'];
$tablename = $_GET['tablename'];
$deleteRow = "DELETE FROM $tablename WHERE id=$id;";
$delete = mysqli_query($connection, $deleteRow);
?>


<script>
    setTimeout(function() {
        location.href = "../../../public/admin.php?msg=Delete Succeed";
    }, 100)
</script>


<!-- DATABASE CLOSE -->
<?php
mysqli_close($connection)
?>