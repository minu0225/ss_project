<?php
    session_start();
    $count="";
    $blog="";
?>
   <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link type="text/css" rel="stylesheet" href="asdas1.css"/>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       
       <div>
       <img src="로그인or회원가입.png" class="body" >
       <p id="header1">B L O G<br>B E R R Y</p>
        </div>
       <meta charset="utf-8">
	<title>Blog Berry</title>
    </head>
    <body>
       <div id="wrap1">
             <div class="left_bar"></div>
              <div id="login_table">
                 <div id="aside">
                 <ul>
                 <li><img src="메뉴.png" class="menu_img">
                       <ul>
                           <li><a href="ss_myblog.php">내블로그</a></li>
                           <li><a href="ss_myinformation.php">내정보</a></li>
                           <li><a href="ss_logout.php">로그아웃</a></li>
                       </ul>
                       </li>
                    </ul>
                   </div>
                    <div id="profile_form">
        <div id="profile_form1">
            <div id="profile_image">
              <?php
                include "member_database.php";
                $sql="select * from ss_1 where id='{$_SESSION['userid']}'";
                $result=$connect->query($sql);
                $row=$result->fetch();

                if($row['file_name_0'])
                {
                $sql="select * from ss_1 where id='{$_SESSION['userid']}'";
                $result=$connect->query($sql);

                    while($row=$result->fetch())
                    {

                        $image_name[0]=$row['file_name_0'];

                        $image_copied[0]=$row['file_copied_0'];

                        for($i=0; $i<1; $i++)
                        {
                            if($image_copied[$i])
                            {
                                $imageinfo=GetImageSize("./data/".$image_copied[$i]);

                                $image_width[$i]=$imageinfo[0];
                                $image_height[$i]=$imageinfo[1];
                                $image_type[$i]=$imageinfo[2];

                                $image_width[$i]=170;
                                $image_height[$i]=170;

                            }
                            else{
                                $image_width[$i]="";
                                $image_height[$i]="";
                                $image_type[$i]="";
                            }
                        }
                    }
                    for($i=0; $i<1; $i++)
                        {
                            if($image_copied[$i])
                            {
                                $img_name=$image_copied[$i];
                                $img_name="./data/".$img_name;
                                $img_width=$image_width[$i];

                                echo"<img src='$img_name' width='250'  height='250' id='img'></td>";
                            }
                        }
                }
                else{
                     echo"<img src='사용자.png' width='250'  height='250' id='img'>";
                }

                ?>
            </div>
            <div id="strong" class='panel-heading'></div>
            <div id="profile_nickname">
                <?php
                $sql="select * from ss_1 where id='{$_SESSION['userid']}'";
                $result=$connect->query($sql);
                $row=$result->fetch();
                    echo"<h2 class='profile_name'>{$row['name']}</h2>";
                ?>
            </div>
            <h4 id="profile_text">
               <?php
                $sql="select * from ss_1 where id='{$_SESSION['userid']}'";
                $result=$connect->query($sql);
                $row=$result->fetch();
                if($row['message'])
                {
                    echo"{$row['message']}";
                }
                else{
                    echo"상태메세지를 작성해주세요.";
                }
                ?>
            </h4>
         </div>
          <div id="profile_form2"></div>

            
            </div> 
       
                <form method="post" action="ss_login.php" class="login_table" id="lc">
                    <input type="text" name="login_id" id="login_id" placeholder="  User"required>
                    <input type="password" name="login_pass" id="login_pass" placeholder="  Password"required>
                    <input type="submit" value="시작하기" id="login_submit">
                   <input type="button" id="join" value="'blog berry'회원이 아니신가요?">
                </form>

            <form action="ss_join.php" method="post">                        
                    <p class="join2">이름</p><input type="text" name="join_name" class="join1"placeholder="  Name"><Br></Br>
                    <p class="join2">아이디</p><input type="text" name="join_id" placeholder="  ID" class="join1" required><Br></Br>
                    <p class="join2">비밀번호</p><input type="password" name="join_pass1" placeholder="  Password" class="join1" required><Br></Br>
                    <p class="join2">비밀번호확인</p><input type="password" name="join_pass2"placeholder="  Password confirm" required class="join1"><Br></Br>
                      <p class="join2">생년월일</p><input type="date" name="join_date" class="join1"><Br></Br>
                   <p class="join2">전화번호</p><input type="tel" name="join_tel" placeholder="  Tel" class="join1" required><Br></Br>              
                           <br><div id="join_back"><div class="glyphicon glyphicon-eject"></div></div><input type="submit" id="join_submit"value="회원가입">                 
                    
               </form> 
          
      </div>
       <?php
        if($_SESSION['blog']==1)
        {
           if($_SESSION['myinformation']==1)
           {?>
           <div class="blog_main">     
               <form action="ss_change.php" method="post" enctype="multipart/form-data">                     
                    <fieldset id="one">
                        <p class="guest">회원정보</p>
                        <ul>
                    <?php
                        include"member_database.php";
                        $sql="select * from ss_1 where id='{$_SESSION['userid']}'";       
                        $result=$connect->query($sql);
                        $row=$result->fetch();
                         
                    echo"<input type='hidden' name='hidden1'  value='{$row['file_name_0']}'>";
                    echo"<input type='hidden' name='hidden2' value='{$row['file_copied_0']}'>";
                    echo"<p class='join4'>프로필사진</p><input type='file' name='upfile[]' class='join3'><Br></Br>";
                    echo"<p class='join4'>이름</p><input type='text' name='join_name' class='join3' value='{$row['name']}' required><Br></Br>";
                   
                    echo"<p class='join4'>비밀번호</p><input type='password' name='join_pass1' class='join3' value='{$row['password']}'  required><Br></Br>";
                    echo"<p class='join4'>상태메세지</p><textarea name='join_message' class='join3' id='change_textarea' placeholder='  상태메세지를 입력해주세요.'>{$row['message']}</textarea><Br></Br>";
		    echo"<p class='join4'>생년월일</p><input type='date' name='join_date' class='join3' value='{$row['date']}' required><Br></Br>";
		    echo"<p class='join4'>전화번호</p><input type='text' name='join_tel' class='join3' value='{$row['tel']}' required><Br></Br>";
                        ?>
                </ul>
                <br><input type="submit" id="join_submit"value="변경">
            </fieldset>
           </form>   
           </div>
           <div class="right_bar"></div>
           <?php
            echo"<script>
            $(function(){
                $('#profile_form').css('opacity','1');
                $('.menu_img').css('opacity','1');
                $('#login_table').css('top','-1000px');
                setTimeout('blog()',250);
                $('#header1').css('display','none');
                $('.blog_main').css('margin-left','620');
                });
            var c=1;
            </script>";
            $blog=0;
            echo"<script>
            $('#login_table').css('background-color',' rgba( 255, 255, 255, 0)');</script>";
            echo"<script>
            $('.left_bar').css('display','block');
            $('.right_bar').css('display','block');
            $('.login_table').css('opacity','0');
            </script>"; 
           }
            else if($_SESSION['modifiedform']==1)
            {?>
              <div class="blog_main">
                 <div class="modified_head">M O D I F I E D</div>
                  <div id="blogwrite_form"><br><br>
                <?php
                echo"<form action='ss_modified1.php?count={$_GET['count']}' method='post'>";
                include "member_database.php";
                $sql="select * from ss_2 where count='{$_GET['count']}'";
                $result=$connect->query($sql);
                $row=$result->fetch();
                $count=$row['count'];
                echo"<input type='text' id='write_title' name='title' value='{$row['title']}'>";
                echo"<textarea name='write' id='write_form' >{$row['body']}</textarea>";
               
                echo"<div class='file'>
               -사진은 수정이 불가능합니다.
           </div><input type='submit' id='modified_button' value='수정하기'>
         </form>";
         ?>
     </div>
              </div><div class="right_bar"></div><?php
              echo"<script>
            $(function(){
                $('#profile_form').css('opacity','1');
                $('.menu_img').css('opacity','1');
                $('#login_table').css('top','-1000px');
                setTimeout('blog()',250);
                $('#header1').css('display','none');
                $('.blog_main').css('margin-left','620');
                });
            var c=1;
            </script>";
            $blog=0;
            echo"<script>
            $('#login_table').css('background-color',' rgba( 255, 255, 255, 0)');</script>";
            echo"<script>
            $('.left_bar').css('display','block');
            $('.right_bar').css('display','block');
            $('.login_table').css('opacity','0');
            </script>"; 
            }
            else if($_SESSION['writeform']==1)
            {?>
              <div class="blog_main">
                 <div class="modified_head">W R I T E</div>
                  <div id="blogwrite_form"><br><br>
                 <form action="ss_blog.php" method="post" enctype="multipart/form-data">
                   <input type="text" id="write_title" name="title" placeholder="제목을 입력해주세요(15자이내로 써주세요..)" required>
                   <textarea name="write" id="write_form" placeholder="글을 입력해주세요" required></textarea>
                   <div id="file_form">
                       <input id="file" type="file" name="upfile[]">
                       <input id="file" type="file" name="upfile[]">
                       <input id="file" type="file" name="upfile[]">
                   </div>
                   <input type="submit" id="modified1_button" value="올리기">
             </form>
             </div>
              </div>  
              <div class="right_bar"></div><?php
              echo"<script>
            $(function(){
                $('#profile_form').css('opacity','1');
                $('.menu_img').css('opacity','1');
                $('#login_table').css('top','-1000px');
                setTimeout('blog()',250);
                $('#header1').css('display','none');
                $('.blog_main').css('margin-left','620');
                });
            var c=1;
            </script>";
            $blog=0;
            echo"<script>
            $('#login_table').css('background-color',' rgba( 255, 255, 255, 0)');</script>";
            echo"<script>
            $('.left_bar').css('display','block');
            $('.right_bar').css('display','block');
            $('.login_table').css('opacity','0');
            </script>"; 
            }
            else{?>
            <div class='blog_main'>
                <input type="button" id="write_button"onclick="write_button()" value="글쓰기">
                        <?php
                        $sql="select * from ss_2 where id='{$_SESSION['userid']}'";
                        $result=$connect->query($sql);
                        if($result)
                            {
                                $num=0;
                                $row=$result->rowCount();
                                $num=$row;

                                $sql="select * from ss_2 where id='{$_SESSION['userid']}' order by count desc";
                                $result=$connect->query($sql);

                            while($row=$result->fetch())//--이미지출력
                            {
                                $count=$row['count'];

                                $image_name[0]=$row['file_name_0'];
                                $image_name[1]=$row['file_name_1'];
                                $image_name[2]=$row['file_name_2'];

                                $image_copied[0]=$row['file_copied_0'];
                                $image_copied[1]=$row['file_copied_1'];
                                $image_copied[2]=$row['file_copied_2'];

                                for($i=0; $i<3; $i++)
                                {
                            if($image_copied[$i])
                            {
                                $imageinfo=GetImageSize("./data/".$image_copied[$i]);

                                $image_width[$i]=$imageinfo[0];
                                $image_height[$i]=$imageinfo[1];
                                $image_type[$i]=$imageinfo[2];


                                    $image_width[$i]=650;
                            }
                            else{
                                $image_width[$i]="";
                                $image_height[$i]="";
                                $image_type[$i]="";
                            }
                                }

                            echo"<div class='panel panel-info'>
                        <div class='blog_head'> <span  class='blog_num1'>  $num 번째글   </span>{$row['title']}<span class='blog_num'>날짜:  {$row['date']}</span></div>

                        <div class='blog_body'>
			{$row['body']}<br>";
                        $num--;
                        for($i=0; $i<3; $i++)
                        {
                            if($image_copied[$i])
                            {
                                $img_name=$image_copied[$i];
                                $img_name="./data/".$img_name;
                                $img_width=$image_width[$i];

                                echo"<img src='$img_name' width='$img_width'id='img1'>";
                            }
                        }
                        echo"<br><div class='mdbutton'><a href='ss_modified.php?count=$count'   class='modified'> <span class='glyphicon glyphicon-edit'>수정</span></a>
                        <a href='ss_delete.php?count=$count'  class='delete'><span class='glyphicon glyphicon-trash'>삭제</span></a></div><div class='footer_bar'></div></div></div>";                       
                            }
                        }
                        ?>
                
            </div>
            <div class="right_bar"></div>

            <?php
            echo"<script>
            $(function(){
                $('#profile_form').css('opacity','1');
                $('.menu_img').css('opacity','1');
                $('#login_table').css('top','-100%');
                setTimeout('blog()',250);
                $('#header1').css('display','none');
                $('.blog_main').css('margin-left','620');
                });
            var c=1;
            </script>";
            $blog=0;
            echo"<script>
            $('#login_table').css('background-color',' rgba( 255, 255, 255, 0)');</script>";
            echo"<script>
            $('.left_bar').css('display','block');
            $('.right_bar').css('display','block');
            $('.login_table').css('opacity','0');
            </script>";                  
            }
        }
        else{
             echo"<script>
            $(function(){
                $('#login_table').css('margin-top','-42%');
                });
            </script>";
        }
        ?>
        <script>
          function write_button()
          {
              location.href="ss_write.php";
          }
          function change_button()
          {
             location.href="ss_passwordform.php";
          }
            
       
          </script>
          <script>
            $(function(){
                
              $("#join").click(function(){
                  $(".login_table").css("margin-top","-100%");
                  
               
                });
                $("#join_back").click(function(){
                    $(".login_table").css("margin-top","130%");
                });
                
            
              });
	var agt = navigator.userAgent.toLowerCase();

	if (agt.indexOf("chrome") != -1) {

	}
	else{
	alert("크롬이 아닐경우 원활한 실행이 안되요. 크롬으로 접속해주세요");
	}

        </script>
          
          </div>
	<script src="./js/app.js"></script>
    </body>
</html>