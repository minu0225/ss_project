<?
    include"member_database.php";

    $sql="select * from ss_1 where id='$join_id'";
    $result=mysql_query($sql,$connect);
    $row=mysql_num_rows($result);

    if($join_pass1!=$join_pass2)
    {
        echo("<script>alert('비밀번호와 비밀번호확인이 다릅니다.')</script>");
        echo "<script>location.href='index.php'</script>";
    }
    else{
        if($row)
        {
            echo("<script>alert('이미 존재하는 아이디입니다')</script>");
            echo "<script>location.href='index.php'</script>";
        }
        else
        {
            $sql="insert into ss_1 (id,password,name,tel,date,nickname)";
            $sql.="values ('$join_id','$join_pass1','$join_name','$join_tel','$join_date','$join_nickname');";
            mysql_query($sql,$connect);              
            
            echo "<script>alert('회원가입이 완료되었습니다.')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
?>