<!-- DATABASE QUERY CONNECT -->
<?php include("../include/queries/subjectsquery.php") ?>

<?php
// USER SELECTED(clicked) ID
$actionId = $_GET['id'];

// QUERY INTO ASSOC OF subjects
$subjectAssoc = mysqli_fetch_all($subjectsresult, MYSQLI_ASSOC);

// QUERY INTO ASSOC OF pages
$page = mysqli_fetch_all($pagesresult, MYSQLI_ASSOC);
?>

<!-- FUNCTION FOR CATCH SELECTED QUERY -->
<?php $catchedVal = catchselectedarr($subjectAssoc, $actionId); ?>


<h3 style="color:rgb(156, 148, 148);"><i class="fa fa-slack" aria-hidden="true"></i> Subject</h3>
<div class="row" style="text-align: center; margin-top: 30px;">
    <div class="col-md-3">
        <p>Name :
            <?php
            if (isset($catchedVal))
                echo $catchedVal['menu_name'];
            ?>
        </p>
    </div>
    <div class="col-md-3">
        <p>Position :
            <?php
            if (isset($catchedVal))
                echo $catchedVal['position'];
            ?>
        </p>
    </div>
    <div class="col-md-3">
        <p>Visible :
            <?php
            if (isset($catchedVal)) {
                if ($catchedVal['visible'] == 1) {
                    echo "yes";
                } else {
                    echo "no";
                }
            }
            ?>
        </p>
    </div>
    <div class="col-md-3">
        <p>Subject Id :
            <?php
            if (isset($catchedVal))
                echo $catchedVal['subject_id'];
            ?>
        </p>
    </div>

</div>
<div class="row" style="text-align: center; margin-top: 30px;">
    <div class="col-md-4"></div>
    <div class="col-md-6"></div>
    <div class="col-md-1">
        <a href="../include/layouts/Edit/deleteDB.php?id=<?php echo $actionId ?>&tablename=subjects">
            <button type="button" class="btn btn-danger" style="border-radius: 3px; opacity: 0.9; width:40px;align-content:center;">
                <i class="bi bi-trash"></i></button>
        </a>
    </div>
    <div class="col-md-1">

        <button type="button" class="btn btn-danger" id="subjectsEditBtn" style="border-radius: 3px; opacity: 0.9;width:40px;align-content:center;">
            <i class="bi bi-pencil-fill"></i></button>
    </div>
</div>
<hr>
<h4 style="color:rgb(156, 148, 148);"><i class="fa fa-slack" aria-hidden="true"></i> Subjects On Page
</h4>
<div class="row" style="text-align: center; margin-top: 30px; ">
    <div class="col-md-12 d-flex flex-wrap " style="gap:10px; padding-left: 50px;">
        <?php

        foreach ($page as $catchedvalue) {
    
            if ($catchedvalue['subject_id'] == $catchedVal['subject_id']) { ?>
                <button type="button" class="btn btn-light <?php if($catchedvalue['visible'] == 1){echo "contentVisi";}else{ echo "contentNonVisi";} ?>">
                    <?php echo $catchedvalue['menu_name'] ?></button>
        <?php
            }
        }
        ?>

    </div>
</div>
<div class="row" style="text-align: center; margin-top: 30px;">
    <div class="col-md-10"></div>
    <div class="col-md-1">
        <button type="button" class="btn btn-info" id="subjectsContentadd" style="border-radius: 3px; opacity: 0.9; width:40px;align-content:center;">
            <i class="fa fa-plus" aria-hidden="true"></i> </button>
    </div>

    <div class="col-md-1">
        <button type="button" class="btn btn-danger" id="subjectsContentedit" style="border-radius: 3px; opacity: 0.9; width:40px;align-content:center;">
            <i class="bi bi-pencil-fill"></i></button>
    </div>
</div>

<hr>