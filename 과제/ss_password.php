<?
    session_start();
?>
   <meta charset="UTF-8">
<?
    if($userpass!=$join_pass1)
    {
        echo("<script>alert('비밀번호가 일치하지 않습니다')</script>");
        echo "<script>location.href='ss_passwordform.php'</script>";
    }
    else{
        echo "<script>location.href='ss_changeform.php'</script>";
    }
?>