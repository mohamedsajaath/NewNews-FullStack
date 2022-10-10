<form action="../include/layouts/Edit/subjectaddDB.php" enctype="multipart/form-data" method="POST" class="animateWhenLoad">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-4">
            <h5 style="color:rgb(156, 148, 148);"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add
            </h5>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger" onclick="navigateManageContent()" style="border-radius: 3px; opacity: 0.9; margin-top: 0px;  width: 40px; margin-left: 50px;">
                <i class="fa fa-times" aria-hidden="true"></i></button>
        </div>

    </div>



    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="usr">Name :</label>
                <input type="text" class="form-control" id="usr" name="subname" placeholder="Enter Name" max="10">
            </div>

        </div>
        <div class="col-md-2">
            <label for="usr">Subject Id:</label>
            <input type="number" class="form-control" name="subId">

        </div>
        <div class="col-md-2">
            <div class="form-group">
                <?php include("../include/queries/subjectsquery.php"); ?>
                <?php
                $subjectResultarr = mysqli_fetch_all($subjectsresult);
                $value = count($subjectResultarr) + 1;
                ?>
                <label for="usr">Position :</label>
                <input type="number" class="form-control" name="subposition" id="usr" value="<?php echo $value ?>">
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>Visible :</label><br />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="on">
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="off" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>

        </div>

        <div class="col-md-2">
            <label for="usr">image:</label>
            <input type="file" class="form-control" name="subImg">

        </div>


    </div>

    <div class="row">
        <div class="col-md-11">
        </div>
        <div class="col-md-1 ">
            <button type="submit" name="submit" class="btn btn-info " style="border-radius: 3px; opacity: 0.9; margin-left: -25px; width:40px;" onclick="return checkIfEmpty()">
                <i class="fa fa-plus" aria-hidden="true"></i> </button>
        </div>

    </div>
</form>