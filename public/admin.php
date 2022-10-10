<!-- SESSION FOR CHECK LOGIN TRUE -->
<?php require("../include/sessionlogin.php") ?>

<!-- HEADER INCLUDE -->
<?php include("../include/layouts/header.php") ?>


<body class="body">
<?php if(isset($_GET['msg'])){ ?>
        <div class="alert alert-success alert-box" role="alert">
            <?= strtoupper($_GET['msg']) ?>
        </div>
<?php } ?>

    <!-- STYLE INCLUDE -->
    <?php include("../include/layouts/style.php") ?>

    <nav class="navbar navbar-expand-xl navbar-dark bg-style">
        <a class="h1 header-name" href="#">NewNews <p style="font-size: 10px; margin-left: 5px;">Admin Panel</p></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="./manage_web_content.php">
                        <i class="fa fa-outdent" aria-hidden="true"></i>
                        Manage Web Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link l-side-margin" href="./manage_admin_user.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
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

    <div class="row main-row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <img src="./images/businessman.png" alt="user" class="user mx-auto  d-block">
            <h3 class="welcome-note">Welcome To Admin Panel</h3>
        </div>
        <div class="col-md-4"></div>

    </div>
    <div class="row" style="width:100%;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <iframe src="../NewNews/index.php" frameborder="10" style="width: 100%; height:500px;"></iframe>
        </div>
        <div class="col-md-1"></div>
    </div>

    <!-- FOOTER INCLUDE -->
    <?php include("../include/layouts/footer.php") ?>