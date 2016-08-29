<?php
    session_start();
?>
<meta charset="utf-8">
<?php
    include"member_database.php";
    $sql="update ss_2 set title='{$_POST['title']}',body='{$_POST['write']}' where count='{$_GET['count']}'";
    $connect->query($sql);

    $blog=1;
    $myinformation=0;
    $modifiedform=0;
    $_SESSION['blog']=$blog;
    $_SESSION['myinformation']=$myinformation;
    $_SESSION['modifiedform']=$modifiedform;
       echo"<script>location.href='index.php';</script>";

?>