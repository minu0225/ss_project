<html>
    <head>
       <link type="text/css" rel="stylesheet" href="asdas1.css"/>
       <meta charset="utf-8">
    </head>
    <body background="회원가입.jpg" id="picture">
        <div id="joinwrap">
        <p id="header">R E G I S T E R</p>
            <div id="join_background">
             <form action="ss_join.php" method="post">                           <fieldset id="one">
                <legend>기본사항</legend>
                <ul>
                    <br><li><label>이름: <input type="text" name="join_name" placeholder="이름을 입력해주세요."required> 예)홍길동</label></li>
                     <br><li><label>생년월일: <input type="date" name="join_date"></label></li>
                   <br><li><label>연락처: <input type="tel" name="join_tel" placeholder="연락처를 입력해주세요."required> -을 빼고 입력해주세요.</label></li> </ul>
                    </fieldset>
                    <fieldset id="two">
                        <legend>회원정보</legend>
                        <ul>
                    <br><li><label>별명: <input type="text" name="join_nickname" placeholder="블로그에 들어갈 이름"required></label>    </li>
                    <br><li><label>아이디: <input type="text" name="join_id" placeholder="아이디를 입력해주세요."required></label>    </li>
                    <br><li><label>비밀번호: <input type="password" name="join_pass1" placeholder="비밀번호를 입력해주세요."></label></li>
                    <br><li><label>비밀번호확인: <input type="password" name="join_pass2"placeholder="비밀번호를 확인해주세요." required></label></li>   
                </ul>
            </fieldset>
                       <div id="register">
                        <br><input type="submit" id="join_submit"value="회원가입">
            </div>
           </form>   
           </div>   
        </div>
    </body>
</html>
