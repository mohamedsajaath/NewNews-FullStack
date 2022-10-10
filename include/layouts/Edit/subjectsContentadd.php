


<form action="../include/layouts/Edit/subjectsContentaddDB.php?subjectid=<?php echo $actionId ?>" method="POST" class="animateWhenLoad" enctype="multipart/form-data">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-4">
            <h5 style="color:rgb(156, 148, 148);"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add
            </h5>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-1"> <button type="button" onclick="closeCurrent()" class="btn btn-danger" style="border-radius: 3px; opacity: 0.9; margin-top: 0px;  width: 40px; margin-left: 50px;">
                <i class="fa fa-times" aria-hidden="true"></i></button></div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="usr">Name :</label>
                <input type="text" class="form-control" id="usr" name="conName" placeholder="Enter Name">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="usr">subject_id:</label>
                <input type="text" class="form-control" id="usr" name="subID" value="<?php echo $catchedVal['subject_id'] ?>">
            </div>
        </div>
        <div class="col-md-2">
            <?php
            $position = 0;
            foreach ($pagesresult as $page) {
                if ($page['subject_id'] == $catchedVal['subject_id']) {
                    $position = $page['position'];
                }
            }
            $nextpos = $position + 1;
            ?>
            <div class="form-group">
                <label for="usr">Position :</label>
                <input type="number" class="form-control" id="usr" name="conPosition" value="<?php echo $nextpos ?>" max="<?php echo $nextpos ?>" min="<?php echo $nextpos ?>">
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>Visible :</label><br />
            <div class="form-check">
                <input class="form-check-input" type="radio" value="on" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="off" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>

        </div>

        <div class="col-md-2"></div>

    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="form-floating">
                <label for="floatingTextarea">Content</label>
                <textarea name="content" class="form-control w-100 m-2" name="content" placeholder="Type Your Content "></textarea>

            </div>
        </div>
        <div class="col-md-4">
        <label for="usr">image:</label>
            <input type="file" class="form-control" name="subImg">
            <input type="text" class="form-control" name="link" placeholder="Paste Source Link">
        </div>
        <div class="col-md-3"> <button type="submit" name="submit" class="btn btn-success" style="border-radius: 3px; opacity: 0.9; margin-top: 100px;  width: 40px; margin-left: 125px;">
                <i class="bi bi-check-lg"></i></button></div>


    </div>
</form>

