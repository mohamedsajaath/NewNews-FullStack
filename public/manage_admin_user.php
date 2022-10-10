<!-- SESSION FOR CHECK LOGIN TRUE -->
<?php require("../include/sessionlogin.php") ?>

<!-- DATABASE CONNECT -->
<?php require_once("../include/layouts/database_connection.php") ?>

<!-- FUNCTIONS -->
<?php require_once("../include/functions.php") ?>

<!-- DATABASE QUERY CONNECT -->
<?php include("../include/queries/adminsquery.php") ?>



<?php
// CONNNECTION CONFIRMATION
confirm_connection($connection);
confirm_query($adminresult);
?>

<!-- HEADER INCLUDE -->
<?php include("../include/layouts/header.php") ?>


<body>

    <?php include("../include/layouts/style.php") ?>

    <nav class="navbar navbar-expand-xl navbar-dark bg-style">
        <a class="h1 header-name  header-name-m" href="./admin.php">NewNews <p style="font-size: 10px; margin-left: 5px;">Manage admin users</p></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="./manage_web_content.php">
                        <i class="bi bi-table"></i>
                        Manage Web Content</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link l-side-margin" href="#">
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
                    <ul class="nav flex-column side-nav-ul">
                        <li class="side-nav-ul-li-BefAft" value="0"><i class="fa fa-hashtag" aria-hidden="true"></i> Manage admins</li>
                    </ul>

                </nav>
            </div>
        </div>

        <div class="col-md-9 col-11">
            <div class="content-div content-div-admin">

                <div class="row animateWhenLoad">
                    <div class="col-md-4">
                        <h3 style="color:rgb(156, 148, 148); font-size:30px;"><i class="bi bi-people"></i> <small>Admins</small></h3>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-light adminsaddbtn" style="border-radius: 3px; opacity: 0.9;width:40px;align-content:center;">
                            <i class="bi bi-plus-lg"></i></button>
                    </div>

                </div>
                <hr>
                <?php
                $size = sizeOf(mysqli_fetch_all($adminresult));
                foreach ($adminresult as $admin) { ?>
                    <div class="row animateWhenLoad" style="text-align: center; margin-top: 20px;">

                        <div class="col-md-5">
                            <p style="font-size: 22px; text-align: left; opacity:0.7;"><i class="bi bi-person"></i> <?php echo $admin['user_name'] ?></p>
                        </div>

                        <div class="col-md-1">
                            <a href="?username=<?php echo $admin['user_name'] ?>&id=<?php echo $admin['id'] ?>">
                                <button type="button" class="btn btn-primary modalbtn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </a>

                        </div>
                        <div class="col-md-1">
                            <?php if ($size != 1) { ?>
                                <a href="../include/layouts/Edit/deleteDB.php?tablename=admins&id=<?php echo $admin['id'] ?>">
                                    <button type="button" class="btn btn-danger" style="border-radius: 3px; opacity: 0.9;width:40px;align-content:center;">
                                        <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </a>
                            <?php } ?>
                        </div>
                    </div>

                <?php } ?>
                <hr>
                <div class="row animateWhenLoad">
                    <div class="col-md-11"></div>
                    <div class="col-md-1" style="display: flex; justify-content:space-around;">
                        <button type="button" class="btn btn-light adminsaddbtn" style="border-radius: 3px; opacity: 0.9;width:60px;align-content:center; margin-right:20px;">
                            ADD</button>
                    </div>

                </div>

                <?php
                if (
                    isset($_GET['username'])
                    && isset($_GET['id'])
                    && !empty($_GET['username'])
                    && !empty($_GET['id'])
                ) {
                    include("../include/layouts/Edit/adminedit.php");
                }
                ?>

            </div>

        </div>


        <!-- FOOTER INCLUDE -->
        <?php require("../include/layouts/footer.php") ?>

        <!-- DATABASE FREE RESULT -->
        <?php
        mysqli_free_result($adminresult);
        ?>

        <!-- DATABASE CLOSE -->
        <?php
        mysqli_close($connection)
        ?>