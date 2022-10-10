<button type="button" class="btn btn-light" onclick="navigateManageContent()" style="border-radius: 3px; opacity: 0.9; margin-top: 0px;  width: 40px; margin-left: 0px;">
  <i class="bi bi-arrow-left"></i></button>

<div style="display: flex;margin:10px 10px; padding-right:30px;  justify-content:space-around; text-align:center; ">
  <label><b>Name</b></label>
  <label><b>Position</b></label>
  <label><b>Visible</b></label>
  <label><b>Content</b></label>
  <label></label>
</div>
<div style="height:70vh; overflow:auto;">
  <?php foreach ($pagesresult as $page) {
    if ($page['subject_id'] == $catchedVal['subject_id']) {
      $name = $page['menu_name'];
      $position = $page['position'];
      $content = $page['content'];
      $visible = $page['visible'];

  ?>

      <form action="../include/layouts/Edit/updateDB.php?tablename=pages&id=<?php echo $page['id'] ?>" method="POST" style="background-color:#fcf9f9;" enctype="multipart/form-data">
        <div style="display: flex;margin:10px;">
          <input name="name" type="text" class="form-control m-2" value="<?php echo $name ?>" style="width:40%;" />
          <input name="position" type="number" class="form-control w-25 m-2" value="<?php echo $position ?>" />

          <div class="form-check w-0 d-flex m-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="on" <?php if ($visible == 1) echo "checked" ?> />
            <label class="form-check-label" for="flexRadioDefault1">
              Yes
            </label>
          </div>
          <div class="form-check w-0 d-flex m-1">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="off" <?php if ($visible == 0) echo "checked" ?> />
            <label class="form-check-label" for="flexRadioDefault2">
              No
            </label>
          </div>

          <textarea name="content" class="form-control w-50 m-2"><?php echo $content ?></textarea>



          <button class="btn btn-success m-2" type="submit" name="submit" style="height:38px;">update</button>



        </div>
        <div style="display: flex;margin:10px 10px; padding:5px; ">
          <div class="col-md-2">
            <label for="usr">Current image:</label>
            <img src="../include/images/news<?php echo  $page['images'] ?>" alt="Current image" style="height:100px; width:100px;">

          </div>
          <div class="col-md-4">
            <label for="usr">Change image:</label>
            <input type="file" class="form-control" name="subImg">
          </div>
          <div class="col-md-4">
            <label for="usr">Change Link:</label>
            <input type="text" class="form-control" name="link" value="<?php echo  $page['link'] ?>">

          </div>

        </div>
      </form>

      <a href="../include/layouts/Edit/deleteDB.php?tablename=pages&id=<?php echo $page['id'] ?>">
        <button class="btn btn-danger m-2" style="position:relative;left:89%; bottom:12%;"><i class="bi bi-trash-fill"></i></button></a>

  <?php
    }
  }

  ?>
</div>