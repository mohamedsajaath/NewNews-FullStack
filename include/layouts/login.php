    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Admin Panel</h3>
                </div>
                <div class="modal-body">
                    <div class="login-box">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <form action="../include/layouts/loginDB.php" method="POST" form-control>
                                    <div class="form-group">
                                        <label for="usr">Username</label>
                                        <input type="text" name="username" class="form-control logiUsername" minlength="2" >
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password</label>
                                        <input type="password" name="password" class="form-control  password" id="pwd" minlength="8">
                                        
                                        <button type="button" class="btnshowpassword" style="background-color:white; border-radius: 100%; opacity: 0.9;width:30px;height:30px;align-content:center; border:none; position:absolute; bottom:75px; right:20px;">
                                            <i class="bi bi-eye" data-val="0"></i></button>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary float-right " style="margin-top: 20px;" >Login</button>
                                </form>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>