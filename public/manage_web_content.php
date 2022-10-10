<!-- SESSION FOR CHECK LOGIN TRUE -->
<?php require("../include/sessionlogin.php") ?>

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

<!-- HEADER INCLUDE -->
<?php include("../include/layouts/header.php") ?>


<body>
<img src="../include/images/news" alt="">

    <!-- STYLE INCLUDE -->
    <?php include("../include/layouts/style.php") ?>


    <nav class="navbar navbar-expand-xl navbar-dark bg-style">
       
        <a class="h1 header-name  header-name-m" href="./admin.php">NewNews <p style="font-size: 10px; margin-left: 5px;">Manage Web Content</p></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item active ">
                    <a class="nav-link" href="#">
                        <i class="bi bi-table"></i>
                        Manage Web Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link l-side-margin" href="./manage_admin_user.php">
                        <i class="bi bi-people"></i>
                        Manage Admin Users</a>
                </li>

                <li class="nav-item l-side-margin ml-5">
                    <a class="nav-link" href="#"> <img src="./images/profile.png" alt="user" class="admin-user" id="adminimg"></a>
                    <div class="dropdown dropleft">
                        <button class="btn btn-secondary dropdown-toggle img-dropdown-btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="border-radius: 10px; margin-top:40px; margin-right:-40px; box-shadow:10px 10px 30px #d9dad7;">
                            <span class="logout ml-3"><i class="fa fa-sign-out" aria-hidden="true" style="color: #DC3545;"></i> logout</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row sub-row">
        <div class="col-md-3 col-1 side-nav">
            <div class="side-nav">
                <nav class=" d-md-block sidebar collapse side-navbar">
                    <ul class="nav flex-column side-nav-ul" id="id01">
                        <?php
                        $comVar = 0;

                        foreach ($subjectsresult as $row) {
                            $comVar = $row['position'];
                            $id = $row['id'];
                            $menuname = $row['menu_name'];
                        ?>
                            <a href='?id=<?= $id ?>'>
                                <li class=' side-nav-ul-li list 
                                <?php
                                if ($id == $_GET['id']) {
                                    echo "side-nav-ul-li-BefAft";
                                }
                                ?>' value="">
                                    <i class='fa fa-hashtag' aria-hidden='true'></i>
                                    <?php echo $menuname ?>
                                </li>
                            </a>

                        <?php }?>


                    </ul>
                    <ul class="nav flex-column side-control-nav-ul" style="<?php if ($_GET== null || $_GET['id'] == "")  {echo "display: none";} ?>">
                        <li class="side-control-nav-ul-li" id="subjectsAddBtn" onclick="click()">
                            <i class="bi bi-plus-lg"></i>
                            Add subject
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="col-md-9 col-11">
            <div class="content-div animateWhenLoad">
                <!-- CONTENT INCLUDE -->
                <?php
                if (isset($_GET['id'])) {
                    include("../include/layouts/content.php");
                } else {
                    include("../include/layouts/contentWelcome.php");
                }
                ?>
                <span id="content-div-edit-div"> </span>
            </div>
        </div>

    </div>

    <!-- FOOTER INCLUDE -->
    <?php include("../include/layouts/footer.php") ?>

    <!-- DATABASE FREE RESULT -->
    <?php
    mysqli_free_result($pagesresult);
    mysqli_free_result($subjectsresult);
    ?>

    <!-- DATABASE CLOSE -->
    <?php
    mysqli_close($connection)
    ?>