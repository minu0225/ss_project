<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="asdas1.css"/>
    <title>회원정보수정</title>
</head>
<body  background="회원가입.jpg" id="picture">
    <div id="wrap">
       <p id="header">C H E C K</p>
        <div id="check_passwordform">
            <div id="check_password1">
                <form action="ss_password.php" method="post">                          
                    <fieldset id="three">
                        <legend>비밀번호확인</legend>
                        <ul>
                        <?
                    echo"<br><li><label>아이디:  $userid</li>";
                    echo"<br><li><label>비밀번호: <input type='password' name='join_pass1' placeholder='비밀번호를 확인해주세요.'required></label></li><br>";
                        ?>
                </ul>
            </fieldset>
                       <div id="four">
                        <br><input type="submit" id="join_submit"value="입력">
            </div>
           </form>         
            </div>
        </div>
    </div>
</body>
</html>