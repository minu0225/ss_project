<?php
    session_start();
    include "member_database.php";
    
    $sql="delete from ss_2 where count='{$_GET['count']}'";
    $connect->query($sql);
    
    $blog=1;
    $_SESSION['blog']=$blog;
    echo"<script>location.href='index.php';</script>";

?>