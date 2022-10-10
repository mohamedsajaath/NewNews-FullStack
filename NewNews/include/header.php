<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NewNews</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- STYLESHEET -->
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- BOOTSTRAP ICON PACK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body class="body" style="background-color: #E8E8E8;margin: 0px; overflow:auto; width: 100%;">


    <!-- NAV BAR  -->
    <nav class="navbar navbar-expand-md navbar-dark  navbarToggle" style="position: fixed; top:0px;">
        <a class="navbar-brand" href="?" style="width: 61%;">
            <img src="./images/newnews logo.png" id="logo">
        </a>
        <button class="navbar-toggler navbartogglerbtn" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse uldiv" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto " style="font-weight:500; gap:15px;">
            
                <?php foreach ($subjectsresult as $subject) { ?>
            
                    <?php if($subject['visible'] == 1){ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="?subId=<?php echo $subject['subject_id'] ?>&subName=<?php echo $subject['menu_name'] ?>"><?php echo ucfirst($subject['menu_name']) ?><span class="sr-only">(current)</span></a>
                    </li>
                <?php } } ?>
                <li class="nav-item active " style="display: flex; flex-wrap:nowrap;">
                    <img class="navimage" src="./images/united-states.png" alt="country">
                    <a href="../public/index.php"><img class="navimage" src="./images/user.png" alt="user"></a>
                </li>

            </ul>

        </div>
    </nav>