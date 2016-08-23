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
<body background="회원정보수정.jpg" id="picture">
    <div id="warp">
        <p id="header">C H A N G E</p>
        <div id="check_passwordform">
            <div id="check_password1">
        <form action="ss_change.php" method="post" enctype="multipart/form-data">                     
                    <fieldset id="one">
                        <legend>회원정보</legend>
                        <ul>
                    <?
                        include"member_database.php";
                        $sql="select * from ss_1 where id='$userid'";       
                        $result=mysql_query($sql,$connect);
                        $row=mysql_fetch_array($result);
                           
                    echo"
                    <br><li><label>프로필사진: <input type='file' name='upfile[]' value='$row[file_name_0]'> 프로필을 변경하실 때 마다 설정해주세요.(보안상문제)</label></li>";
                    echo"<br><li><label>이름: <input type='text' name='join_name' value='$row[name]'required> 예)홍길동</label></li>";
                    echo"<br><li><label>별명: <input type='text' name='join_nickname' value='$row[nickname]'required> 블로그이름</label>    </li>";
                    echo"<br><li><label>비밀번호: <input type='password' name='join_pass1' value='$row[password]'required></label></li>";
                    echo"<br><li><label>상태메세지: <textarea name='join_message' id='change_textarea' required>$row[message]</textarea> 오른쪽 삼각형을 잡아당기시면 칸이 커집니다.</label></li>";
                    echo"<br><li><label>배경색: <table style='text-align:center'><tr>
                    <td><img src='그라데이션02.png' id='back_picture' ></td>
                    <td><img src='그라데이션04.png' id='back_picture' ></td>
                    <td><img src='그라데이션05.png' id='back_picture' ></td>
                    <td><img src='그라데이션07.png' id='back_picture' ></td>
                    <td><img src='그라데이션08.png' id='back_picture' ></td>
                    <td><img src='그라데이션09.png' id='back_picture' ></td></tr>
                    <tr>
                    <td><input type='radio' name='picture' value='2'></td>
                    <td><input type='radio' name='picture' value='4'></td>
                    <td><input type='radio' name='picture' value='5'></td>
                    <td><input type='radio' name='picture' value='7'></td>
                    <td><input type='radio' name='picture' value='8'></td>
                    <td><input type='radio' name='picture' value='9'></td>
                    </tr></table>원하는 이미지를 클릭하세요</label></li>";
                        ?>
                </ul>
            </fieldset>
                       <div id="register">
                        <br><input type="submit" id="join_submit"value="변경">
            </div>
           </form>   
            </div>
        </div>
    </div>
</body>
</html>
<input type='radio' name='2'>