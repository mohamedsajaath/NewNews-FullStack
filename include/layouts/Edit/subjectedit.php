


<form action="../include/layouts/Edit/subjectUpdateDB.php?id=<?php echo $actionId ?>" method="POST" enctype="multipart/form-data" class="animateWhenLoad">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-4">
            <h5 style="color:rgb(156, 148, 148);"><i class="fa fa-wrench" aria-hidden="true"></i> Edit
            </h5>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-1"> <button type="button" class="btn btn-danger" onclick="closeCurrent()" style="border-radius: 3px; opacity: 0.9; margin-top: 0px;  width: 40px; margin-left: 10px;">
                <i class="fa fa-times" aria-hidden="true"></i></button></div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="usr">Name :</label>
                <input type="text" class="form-control" id="usr" name="subUpName" value="<?php if (isset($catchedVal)) echo $catchedVal['menu_name']; ?>">
            </div>
        </div>
        <div class="col-md-2">
            <label for="usr">Subject Id :</label>
            <input type="number" class="form-control" name="subId" value="<?php echo $catchedVal['subject_id'] ?>">
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="usr">Position :</label>
                <input type="number" class="form-control" name="subUpPosition" id="usr" value="<?php if (isset($catchedVal)) echo $catchedVal['position']; ?>">
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>Visible :</label><br />
            <div class="form-check">
                <input class="form-check-input" value="on" type="radio" name="flexRadioDefault" id="flexRadioDefault1" <?php if ($catchedVal['visible'] == 1) echo "checked" ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="off" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?php if ($catchedVal['visible'] == 0) echo "checked" ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>

        </div>

        <div class="col-md-1">
            <button type="submit" class="btn btn-success" style="border-radius: 3px; opacity: 0.9; margin-top: 50px;margin-left:10px;">
                <i class="bi bi-check-lg"></i></button>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-2">
            <label for="usr">Current image:</label>
            <img src="../include/images<?php if (isset($catchedVal)) echo $catchedVal['images']; ?>" alt="Current image" style="height:100px; width:100px;">

        </div>
        <div class="col-md-4">
            <label for="usr">Change image:</label>
            <input type="file" class="form-control" name="subImg">

        </div>

    </div>
</form>