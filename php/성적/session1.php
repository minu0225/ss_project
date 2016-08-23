<?
    session_start();

    echo"세션시작!!<p>";

    $_SEESION['userid']="junho";
    $_SESSION['username']="문준호";
    $_SESSION['time']=time();
    echo $_SESSION['userid']."<br>";
    echo $_SESSION['username']."<br>";
    echo $_SESSION['time'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">