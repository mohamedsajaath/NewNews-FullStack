<!-- Modal -->
<form action="../include/layouts/Edit/adminaddDB.php?func=edit&id=<?php echo $_GET['id'] ?>" method="POST">
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin <small style="font-size: 15px;"><?php echo $_GET['username'] ?></small></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="row" style="gap:35px;">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control w-75" value="<?php echo $_GET['username'] ?>" />
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control password" placeholder="Enter New Password" minlength="8" />
                            <small style="opacity:0.5; margin-top:2px;">password must at least 8 characters</small>
                        </div>
                        <div class="col-md-1 " style="padding-right: 80px;">
                            <button type="button" class="btnshowpassword" style="border-radius: 100%; opacity: 0.9;width:30px;height:30px;align-content:center; margin-top:5px; border:none;">
                                <i class="bi bi-eye" data-val="0"></i></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>