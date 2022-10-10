<!-- FUNCTION FOR CONFIRM DATABASE CONNECTION -->
<?php
function confirm_connection($connectionVar)
{
    if ($connectionVar) {
        echo "<small style='position:fixed; bottom:0vh; right:0px;opacity:0.5; color:green;'>DB-Connection-succeed...</small>";
    } else {
        die("database connection error");
    }
}
?>


<!-- FUNCTION FOR CONFIRM DATABASE QUERY -->
<?php 
function confirm_query($queryVar){
    if($queryVar){
        echo "<small style='position:fixed; bottom:0vh; right:150px;opacity:0.5; color:red;'>DB-Query-succeed...</small>";
    }else{
        die("database query error");
    }
}
?>


<!-- FUNCTION FOR CATCH SELECTED QUERY -->
<?php
function catchselectedarr($subjectAssocResult, $actionId)
{
    foreach ($subjectAssocResult as $subject) {
        if ($subject['id'] == $actionId) {
            return $subject;
        }
    }
}
?>
