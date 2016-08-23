
<html>
    <head>
       <link type="text/css" rel="stylesheet" href="asdas.css"/>
       <meta charset="utf-8">
        <a href="index.php"><img id="head"src="http://cfile233.uf.daum.net/image/20592F4F50373C4033543A"/></a>
    </head>
    <body>
       <div id="Wrap">
        <div id="a">
            <div id="aa">Act20.자각</div>
            <div id="aaa"><strong>던파소식</strong></div>
                <div id="aaaa">공지사항<br>------------------<br>업데이트<br>------------------<br>이벤트<br>------------------<br>이달의 아이템<br>------------------<br>세리아의 상점<p></p></div>
                <div id="aaaaa"></div>
            <div id="aaa"><strong>미디어</strong></div>
                <div id="aaaa">오늘의 던파<br>------------------<br>라이브 톡톡<br>------------------<br>던파매거진<br>------------------<br>던파카툰<br>------------------<br>개발자 노트<p></p></div>
                <div id="aaaaa"></div>    
            <div id="aaa"><strong>가이드</strong></div>
                <div id="aaaa">초보자 가이드<br>------------------<br>기본 정보<br>------------------<br>캐릭터 정보<br>------------------<br>던파스토리<p></p></div>
                <div id="aaaaa"></div>   
            <div id="aaa"><strong>커뮤니티</strong></div>
                <div id="aaaa">던파캐스트<br>------------------<br>집중토론<br>------------------<br>던파UCC<br>------------------<br>던파캡쳐<br>------------------<br>자유게시판<br>------------------<br>서버게시판<p></p></div>
            <div id="aaaaa"></div>   
                <div id="aaa"><strong>랭킹</strong></div>
                <div id="aaaa">통합 RP랭킹<br>------------------<br>통합 경험치랭킹<br>------------------<br>경험치 랭킹<br>------------------<br>사망의 탑 랭킹<br>------------------<br>하드코어 랭킹<p></p></div>
            <div id="aaaaa"></div>   
                <div id="aaa"><strong>서비스센터</strong></div>
                <div id="aaaa">서비스센터 홈<br>------------------<br>FQA<br>------------------<br>1:1 문의<br>------------------<br>선복구 서비스<br>------------------<br>모바일앱 연동센터<br>------------------<br>청소년보호프로그램<br>------------------<br>약관 및 정책<p></p></div>  
            <div id="aaaaaa">자료실</div>  
            <div id="aaaaaa">보안서비스</div>
        </div>
        <div id="b"><img src="사진\4.JPG"></div>
        </div>
       
       <div id="g"><img src="사진\6.JPG"/>
           <div id="gg"><strong>게임다운로드   |   퍼스트서버</strong></div>
       </div>
        <div id="ang">
           <?
            if(!$userid)
            {
                include"login.php";
            }
        ?>
        </div>
    
        <div id=join_1>
          <div id="join_box">
                <p>▶회원가입</p>
                 <table id="table_0">
                    <form action="member_join.php" method="post">                                          
                         <tr><td id="table_1">아이디 &nbsp;&nbsp;:</td> <td ><input type="text" name="id_1" id="table_2" placeholder="아이디"></td></tr>
                         <tr><td id="table_1">비밀번호 &nbsp;&nbsp;:</td> <td><input type="password" name="pass_1" id="table_2" placeholder="비밀번호"></td></tr>
                         <tr><td id="table_1">이름 &nbsp;&nbsp;:</td> <td><input type="text" name="name" id="table_2" placeholder="이름"></td></tr>
                         <tr><td id="table_1">전화번호 &nbsp;&nbsp;:</td> <td><input type="text" name="tel" id="table_2" placeholder="전화번호"></td></tr>
                         
                         <td colspan="2"><input type="submit" id="table_3" value="회원가입 저장"></td>
                     </form>
                 </table>
          </div>
        </div>
    </body>
</html>