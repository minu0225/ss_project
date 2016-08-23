<?
    session_start();
    include "member_database.php";
    
    $sql="delete from ss_2 where count='$count'";
    mysql_query($sql,$connect);
    
    $blog=1;
    $_SESSION['blog']=$blog;
    echo"<script>location.href='index.php';</script>";

?>