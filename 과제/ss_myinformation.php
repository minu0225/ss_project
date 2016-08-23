<?
    session_start();

    $blog=1;
    $myinformation=1;
    $modifiedform=0;
    $writeform=0;
    $_SESSION['writeform']=$writeform;
    $_SESSION['blog']=$blog;
    $_SESSION['myinformation']=$myinformation;
    $_SESSION['modifiedform']=$modifiedform;
    echo"<script>location.href='index.php';</script>";
?>