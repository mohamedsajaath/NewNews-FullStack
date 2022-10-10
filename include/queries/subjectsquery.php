<?php
    $subjectquery = "SELECT * FROM subjects ORDER BY position;";
    $subjectsresult = mysqli_query($connection, $subjectquery);
?>