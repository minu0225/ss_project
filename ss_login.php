<?php
    session_start();
?>
<meta charset="utf-8">
<?php
        include"member_database.php";
        $sql="select * from ss_1 where id='{$_POST['login_id']}'";
        $result=$connect->query($sql);
        $row=$result->fetch();
        if(!$row)
        {
            echo "<script>alert('존재하는 아이다가아님')</script>";
            echo ("<script>location.href='index.php'</script>");
        }
        else{
        if( $_POST['login_id'] != $row['id'])
        {
            echo "<script>alert('아이디가 일치하지 않습니다')</script>";
           echo ("<script>location.href='index.php'</script>");
        }
       else if( $_POST['login_pass'] !=$row['password'])
        {
            echo "<script>alert('비밀번호가 일치하지 않습니다')</script>";
           echo ("<script>location.href='index.php'</script>");
        }
        else
        {
            $userid=$row['id'];
            $username=$row['name'];
            $userpass=$row['password'];
            $blog=1;
            $myinformation=0;
            $modifiedform=0;
            $writeform=0;
            $_SESSION['writeform']=$writeform;
            $_SESSION['userid']=$userid;
            $_SESSION['username']=$username;
            $_SESSION['userpass']=$userpass;
            $_SESSION['blog']=$blog;
            $_SESSION['myinformation']=$myinformation;
            $_SESSION['modifiedform']=$modifiedform;
            
            echo "<script>alert('{$username}님 환영합니다!')</script>";
            echo ("<script>location.href='index.php'</script>");
        }
        }
?>