<?
   include"member_database.php";

    $sql="select * from member where id='$id_1'";
    $result=mysql_query($sql,$connect);
    $row=mysql_num_rows($result);

    if($row)
    {
        echo("<script>alert('이미 존재하는 아이디입니다')</script>");
    }

    else{
        
        $sql= "insert into member(id,pass,name,tel)";
        $sql.= "values ('$id_1','$pass_1','$name',$tel);";
        mysql_query($sql,$connect);
        mysql_close();
    }
    echo"<script>location.href='index.php'</script>";
?>
