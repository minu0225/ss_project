<?
    session_start();
    include "member_database.php";
    
    $blog=1;
    $myinformation=0;
    $modifiedform=1;
    $_SESSION['blog']=$blog;
    $_SESSION['myinformation']=$myinformation;
    $_SESSION['modifiedform']=$modifiedform;
    echo"<script>location.href='index.php?count=$count';</script>";

?>