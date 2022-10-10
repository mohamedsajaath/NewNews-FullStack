<?php
session_start();
$_SESSION["login"] = "false";
$_SESSION['testing'] = 'hi';

?>
<!-- DATABASE CONNECT -->
<?php require_once("../include/layouts/database_connection.php") ?>

<!-- FUNCTIONS -->
<?php require_once("../include/functions.php") ?>

<!-- DATABASE QUERY CONNECT -->
<?php
// SUBJECT QUERY
include("../include/queries/subjectsquery.php");
// PAGES QUERY
include("../include/queries/pagesquery.php");
// CONNNECTION CONFIRMATION
confirm_connection($connection);
confirm_query($pagesresult);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NewNews</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- BOOTSTRAP ICON PACK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- STYLE SHEET -->
    <?php include("../include/layouts/style.php") ?>
</head>

<body>
<?php if(isset($_GET['msg'])){ ?>
        <div class="alert alert-danger alert-box" role="alert">
            <?= strtoupper($_GET['msg']) ?>
        </div>
        
<?php } ?>

    <nav class="navbar navbar-expand-xl navbar-dark bg-style">
        <a class="h1 header-name" href="../NewNews/index.php">NewNews</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:85%;">
                admin login
            </button>
        </div>
    </nav>

    <!-- LOGIN MODAL -->
    <?php include("../include/layouts/login.php") ?>


    <div class="row main-row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="welcome-note">NewNews Admin Panel</h2>
        </div>
        <div class="col-md-4"></div>

    </div>

    <!-- FOOTER INCLUDE -->
    <?php require("../include/layouts/footer.php") ?>