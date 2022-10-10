<?php
    $pagesquery = "SELECT * FROM pages ORDER BY position;";
    $pagesresult = mysqli_query($connection, $pagesquery);

?>