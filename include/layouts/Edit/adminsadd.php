<div class="row animateWhenLoad" style="margin-top: 50px;">
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <button type="button" class="btn btn-danger" onclick="navigateManageadmins()" style="border-radius: 3px; opacity: 0.9; margin-top: 0px;  width: 40px; margin-left: 150px;">
            <i class="fa fa-times" aria-hidden="true"></i></button>
    </div>

</div>

<form action="../include/layouts/Edit/adminaddDB.php?func=insert" method="POST">

    <div class="row animateWhenLoad" style="text-align: center; margin-top: 0px;text-align: left;">
        <div class="col-md-4">
            <label>Username :</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" />
        </div>
        <div class="col-md-4">
            <label>Password :</label>
            <input type="password" name="password" class="form-control password" minlength="8" placeholder="Enter Password" />
            <small style="opacity:0.5;">password must at least 8 characters</small>
        </div>
        <div class="col-md-1">
            <button type="button" class="btnshowpassword" style="border-radius: 100%; opacity: 0.9;width:30px;height:30px;align-content:center; margin-top:35px; border:none;">
                <i class="bi bi-eye" data-val="0"></i></button>
            <!-- bi bi-eye-fill   for fill eye icon -->
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <button type="submit" name="submit" class="btn btn-success" style="border-radius: 3px; opacity: 0.9;width:40px;align-content:center; margin-top:35px;">
                <i class="bi bi-check-lg"></i></button>
        </div>
    </div>

</form>