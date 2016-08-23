<?
    session_start();

    include"member_database.php";
    $sql="update ss_2 set title='$title',body='$write' where count='$count'";
    mysql_query($sql,$connect);

    $blog=1;
    $myinformation=0;
    $modifiedform=0;
    $_SESSION['blog']=$blog;
    $_SESSION['myinformation']=$myinformation;
    $_SESSION['modifiedform']=$modifiedform;
       echo"<script>location.href='index.php';</script>";

?>