<?
    $connect=mysql_connect("localhost","junho","2343");
    mysql_select_db("junho_db",$connect);

    $sql="delete from stud_score where num=$num";
    mysql_query($sql,$connect);

    mysql_close($connect);
    header("location:index.php");
?>