<script>
    // COMMON JS
    $('#subjectsEditBtn').click(function() {
       $('#content-div-edit-div').html(" ");
       $('#content-div-edit-div').html(`<?php include("../include/layouts/Edit/subjectedit.php") ?>`);
    });
    </script>
    <script>
   //  LOGOUT 
   $(document).on('click','.logout',function(){
      setTimeout(function(){
         location.href = './index.php?msg=Logged out';
      },200);
   });
 
 </script>

 <script>
    //  MANAGE WEB CONTENT JS
    function closeCurrent() {
       $('#content-div-edit-div').html(" ");
    }

    $('#subjectsAddBtn').click(function() {
       $('.content-div').html(" ");
       $('.content-div').html(`<?php include("../include/layouts/Edit/subjectadd.php") ?>`);
    });

    $('#subjectsContentadd').click(function() {
       $('#content-div-edit-div').html(" ");
       $('#content-div-edit-div').html(`<?php include("../include/layouts/Edit/subjectsContentadd.php") ?>`);
    });


    function navigateManageContent() {
       location.href = './manage_web_content.php';
    }


    $('#subjectsContentedit').click(function() {
       let test = `<?php include("../include/layouts/Edit/subjectsContentEdit.php") ?>`;
       console.log(test);
       $('.content-div').html(" ");
       $('.content-div').html(test);
    });
 </script>
 <script>
    //  MANAGE ADMINS JS
    $('.adminsaddbtn').click(function() {
       $('.content-div-admin').html("");
       $('.content-div-admin').html(`<?php include("../include/layouts/Edit/adminsadd.php") ?>`);

    });

    function navigateManageadmins() {
       location.href = './manage_admin_user.php';
    }
 </script>
 <script>
    $(document).on('click', '.btnshowpassword', function() {

       let thiselm = $(this);
       thiselm.find('i').attr("class", "bi bi-eye-fill");
       $('.password').attr("type", "text");

       setTimeout(function() {
          thiselm.find('i').attr("class", "bi bi-eye");
          $('.password').attr("type", "password");
       }, 1000);

    });
 </script>


 <script>
    <?php
      if (
         isset($_GET['username'])
         && isset($_GET['id'])
         && !empty($_GET['username'])
         && !empty($_GET['id'])
      ) {
         echo "$('#editmodal').modal('show');";
      }
      ?>
 </script>

 <script>
    $('.logiUsername').focusout(function() {
       if (($('.logiUsername').val().length) < 1) {
          $('.logiUsername').css("border", "solid 1px #FF7A5E")
       } else {
          $('.logiUsername').css("border", "solid 1px Green")
       }
    });
 </script>

