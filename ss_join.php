<?php
  
    include"member_database.php";
    $sql="select * from ss_1 where id='{$_POST['join_id']}'";
    $result=$connect->query($sql);
    $row=$result->fetch();

    if($_POST["join_pass1"] != $_POST["join_pass2"])
    {
        echo("<script>alert('비밀번호와 비밀번호확인이 다릅니다.')</script>");
        echo "<script>location.href='index.php'</script>";
    }
    else{
        if($row['id'])
        {
            echo("<script>alert('이미 존재하는 아이디입니다')</script>");
            echo "<script>location.href='index.php'</script>";
        }
        else
        {
            $sql="insert into ss_1 (id,password,name,tel,date,nickname)";
            $sql.="values ('{$_POST['join_id']}','{$_POST['join_pass1']}','{$_POST['join_name']}','{$_POST['join_tel']}','{$_POST['join_date']}','{$_POST['join_nickname']}')";
            $result=$connect->query($sql);
            
            echo "<script>alert('회원가입이 완료되었습니다.')</script>";
           echo "<script>location.href='index.php'</script>";
        }
    }
?>