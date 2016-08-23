<?
    session_start();
?>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="app.js"></script>
<link type="text/css" rel="stylesheet" href="asdas1.css"/>
<?
        include"member_database.php";
        $sql="select * from ss_1 where id='$login_id';";
        $result=mysql_query($sql,$connect);
        if(!$result)
        {
            echo "<script>alert('존재하는 아이다가아님')</script>";
            echo ("<script>location.href='index.php'</script>");
        }
        else{
            $row=mysql_fetch_array($result);
        
        if($login_id!=$row[id])
        {
            echo "<script>alert('아이디가 일치하지 않습니다')</script>";
            echo ("<script>location.href='index.php'</script>");
        }
       else if($login_pass!=$row[password])
        {
            echo "<script>alert('비밀번호가 일치하지 않습니다')</script>";
           echo ("<script>location.href='index.php'</script>");
        }
        else
        {
            $userid=$row[id];
            $username=$row[name];
            $userpass=$row[password];
            $usernickname=$row[nickname];
            $blog=1;
            $myinformation=0;
            $modifiedform=0;
            $writeform=0;
            $_SESSION['writeform']=$writeform;
            $_SESSION['userid']=$userid;
            $_SESSION['username']=$username;
            $_SESSION['userpass']=$userpass;
            $_SESSION['usernickname']=$usernickname;
            $_SESSION['blog']=$blog;
            $_SESSION['myinformation']=$myinformation;
            $_SESSION['modifiedform']=$modifiedform;
            
            echo "<script>alert('{$username}님 환영합니다!')</script>";
            echo ("<script>location.href='index.php'</script>");
        }
        }
?>