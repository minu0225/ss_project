<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css"rel="stylesheet" href="asdasd.css">
    <title>Document</title>
</head>
<body>
   <div id="wrap">
       <div id="body">
            <header>
                <img src="집이미지.jpg" id="img1">
                <div id="title">Smart Space</div>
                <div></div>
                
            </header>          
               <div id="content">
                <div id="left"><?
                    if($login==1)
                    {?>
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/eALFV97yZCg" frameborder="0" allowfullscreen></iframe>
                    <?}
                    else{
                        echo"<img src='학교.png' id='img2'>";
                    }?>
                </div>
                <div id="right">
                   <?
                    if($login==1)
                    {
                        include "member_database.php";
                        $sql="select * from a where id='$id'";
                        $result = mysql_query($sql,$connect);
                        $row = mysql_fetch_array($result);
                    echo"<div id='login_form'>
                    <div id='login_a'> $row[name] 님 환영합니다<br>$row[date] 가입</div>";
                    echo"<div id='logout'><a href='logout.php' id='logoutlink'>로그아웃</a></div></div>";
                    }
                    else if($join==1)
                    {?>
                    <div id="login_form">
                      <form action="join.php" method="post">
                       <input type="text" name="id" id="id" placeholder=" ID" required>
                       <input type="password" name="password" id="password" placeholder=" Password" required>
                       <input type="text" name="name" id="name" placeholder=" Name" required>
                       <input type="submit" id="submit" value="회원가입">
                       </form>
                       <a href="loginform.php" id="joinlink">로그인창가기</a>
                    </div>
                    <?}
                    else{?>
                  <div id="login_form">
                      <form action="login.php"  method="post">
                       <input type="text" name="id" id="id" placeholder=" ID" required>
                       <input type="password" name="password" id="password" placeholder=" Password" required>
                       <input type="submit" id="submit" value="로그인">
                       </form>
                       <a href="joinform.php" id="joinlink">회원이 아니신가요?</a>
                    </div>
                   <? }
                        ?>
                </div>
                </div> 
                <footer></footer>
        </div>
    </div>
</body>
</html>