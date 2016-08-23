<?
    session_start();
?>
  <meta charset="UTF-8"> 
<?
    include"member_database.php";
    $date= date(m월d일h시m분);
    
    $sql="select * from a where id=$id";
    $result=mysql_query($sql,$connect);
    
    if($result)
    {
        echo"<script>alert('아이디중복')</script>";
        echo"<script>location.href='index.php';</script>";
    }
    else{
        $sql="insert into a (id,password,date,name)";
        $sql.="values('$id','$password','$date','$name')";
        mysql_query($sql,$connect);
    
        $join=0;
        $_SESSION['join']=$join;
    
        echo"<script>alert('로그인하세여')</script>";
        echo"<script>location.href='index.php';</script>";
    }
?>