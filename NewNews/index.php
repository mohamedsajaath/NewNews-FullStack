<!-- DATABASE CONNECT -->
<?php require_once("../include/layouts/database_connection.php") ?>

<!-- FUNCTIONS -->
<?php require_once("../include/functions.php") ?>

<!-- DATABASE QUERY CONNECT -->
<?php
// SUBJECT QUERY
include("../include/queries/subjectsquery.php");
include("../include/queries/pagesquery.php");

?>
<!-- HEADER -->
<?php require("./include/header.php"); ?>
<?php if (!isset($_GET['subId'])) { ?>
    <!-- NEWS WIDGETS -->
    <div class="row widgets " style=" margin-top:100px; margin-left: 7.5%; width: 85%; margin-bottom: 80px; position: relative; ">
        <?php $count = 0; ?>
        <?php foreach ($subjectsresult as $subject) { ?>
            <?php if ($subject['visible'] == 1) { ?>
                <?php $count += 1; ?>
                <?php if ($count <= 3) { ?>
                    <div class="col-md-4 col-12 " style="height: 304px; margin-bottom: 40px;">
                        <a href="?subId=<?php echo $subject['subject_id'] ?>&subName=<?php echo $subject['menu_name'] ?>" style="text-decoration: none;">
                            <span class=" image-blur">
                                <img src="../include/images<?php echo $subject['images'] ?>" alt="<?php echo $subject['menu_name'] ?>" class="widget-image image-brightness ">
                            </span>
                            <p class=" font-minimize" style="position:relative ; top:-60%; text-align: center; color:white; font-size: 50px; font-weight: bolder;">
                                <?php echo strtoupper($subject['menu_name']) ?>
                            </p>
                        </a>
                    </div>
                <?php } else {  ?>

                    <div class="col-md-6 col-12" style="height:150px; margin-bottom: 40px;">
                        <a href="?subId=<?php echo $subject['subject_id'] ?>&subName=<?php echo $subject['menu_name'] ?>" style="text-decoration: none;">
                            <span class=" image-blur">
                                <img src="../include/images<?php echo $subject['images'] ?>" alt="<?php echo $subject['menu_name'] ?>" class="widget-image-w image-brightness image-blur">
                            </span>
                            <p style="position:relative ; top:-80%; text-align: center; color:white; font-size: 50px; font-weight: bolder;">
                                <?php echo strtoupper($subject['menu_name']) ?>
                            </p>
                        </a>
                    </div>


                <?php } ?>
        <?php }
        } ?>
    </div>


    <!-- COMPANIES LOGO -->
    <div class="row companyLogo" style="  width: 100%; align-content: center; margin:0px; ">
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/bbc.png" alt="logo" class="companies-logo">
        </div>
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/cnn.png" alt="logo" class="companies-logo">

        </div>
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/ap news.png" alt="logo" class="companies-logo">

        </div>
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/al-jazeera-tv6503.jpg" alt="logo" class="companies-logo">

        </div>
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/ap news.png" alt="logo" class="companies-logo">

        </div>
        <div class="col-md-2 col-6">
            <img src="./images/companies logo/al-jazeera-tv6503.jpg" alt="logo" class="companies-logo">

        </div>


    </div>

<?php } else { ?>

    <?php require('./include/page.php') ?>

<?php } ?>
<!-- FOOTER -->
<?php require("./include/footer.php"); ?>



<?php 
mysqli_free_result($subjectsresult);
mysqli_free_result($pagesresult);
?>
<!-- DATABASE CLOSE -->
<?php
mysqli_close($connection);
?>