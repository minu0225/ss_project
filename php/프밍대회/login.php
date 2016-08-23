<?
    session_start();
?>
  <meta charset="UTF-8">
<?
    include"member_database.php";

    $sql="select * from a where id= '$id'";
    $result=mysql_query($sql,$connect);
    $row=mysql_fetch_array($result);

    if(!$row[id])
    {
        echo"<script>alert('아이디를 확인하세요')</script>";
         echo"<script>location.href='index.php';</script>";
    }
    else if(!$row[password])
    {
        echo"<script>alert('비밀번호를 확인하세요')</script>";
         echo"<script>location.href='index.php';</script>";
    }
    else{
    $login=1;
    $_SESSION['id']=$id;
    $_SESSION['login']=$login;
    echo"<script>alert('로그인성공')</script>";
    echo"<script>location.href='index.php';</script>";
    }
?>