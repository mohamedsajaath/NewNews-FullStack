<!-- HEADER -->
<div class="row w-100" style=" margin-top: 100px; ">
    <div class="col-4"></div>
    <div class="col-4">
        <span>
            <h1 class="Newsheader"><?php echo strtoupper($_GET['subName']) ?></h1>
        </span>
    </div>
    <div class="col-4"></div>
</div>


<!-- NEWS -->

<div class="row w-100" style="margin: 0px;  margin-top: 50px; justify-content:flex-start;">
    <?php foreach ($pagesresult as $page) { ?>
        <?php if ($_GET['subId'] == $page['subject_id'] && $page['visible'] == 1) { ?>
           
                <div class="col-md-4">
                <a href="<?php echo $page['link'] ?>" style="text-decoration:none; color:black;">
                    <div class="newsDiv" style="padding-top: 12px;">
                        <h6 class="col-12"><?php echo $page['menu_name'] ?></h6>
                        <img src="../include/images/news<?php echo $page['images'] ?>" alt="<?php echo $page['menu_name'] ?>" alt="news" class="newsImage col-8">
                        <p class="newsText  col-12"><?php echo $page['content'] ?>
                        </p>

                    </div>
                    </a>
                </div>
            

    <?php }
    } ?>



</div>