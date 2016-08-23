<?
    session_start();
?>
<meta charset="utf-8">
<?
    if(!$id)
    {
        echo ("<script>alert('아이디를 입력하세요')</script>");
        
    }

    else if(!$pass)
    {
        echo ("<script>alert('비밀번호를 입력하세요')</script>");
    }
    else{
        include"member_database.php";
        
        $sql="select * from member;";
        $result=mysql_query($sql,$connect);
        $row=mysql_fetch_array($result);
        
        if($id!=$row[id])
        {
            echo "<script>alert('아이디가 일치하지 않습니다')</script>";
        }
       else if($pass!=$row[pass])
        {
                echo "<script>alert('비밀번호가 일치하지 않습니다')</script>";
        }
        else
        {
            $userid=$row[id];
            $userpass=$row[pass];
            $username=$row[name];
            $usertel=$row[tel];
            
            $_SESSION['userid']=$userid;
            $_SESSION['userpass']=$userpass;
            $_SESSION['username']=$username;
            $_SESSION['usertel']=$usertel;
        }
    }
?>
<script>location.href='index.php'</script>
