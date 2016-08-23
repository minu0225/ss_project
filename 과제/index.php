<?
    session_start();
?>
   <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link type="text/css" rel="stylesheet" href="asdas1.css"/>
       <script src="http://code.jquery.com/jquery-latest.min.js"></script>
       <div>
       <img src="로그인or회원가입.png" class="body" >
       <p id="header1">B L O G<br>B E R R A Y</p>
        </div>
       <meta charset="utf-8">
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
              <?
                include "member_database.php";
                $sql="select * from ss_1 where id='$userid'";
                $result=mysql_query($sql,$connect);
                $row=mysql_fetch_array($result);

                if($row[file_name_0])
                {
                $sql="select * from ss_1 where id='$userid'";
                $result=mysql_query($sql,$connect);

                    while($row=mysql_fetch_array($result))
                    {
                        $count=$row[count];

                        $image_name[0]=$row[file_name_0];

                        $image_copied[0]=$row[file_copied_0];

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
                <?
                $sql="select * from ss_1 where id='$userid'";
                $result=mysql_query($sql,$connect);
                $row=mysql_fetch_array($result);
                    echo"<h2 class='profile_name'>$row[name]</h2>";
                ?>
            </div>
            <h4 id="profile_text">
               <?
                $sql="select * from ss_1 where id='$userid'";
                $result=mysql_query($sql,$connect);
                $row=mysql_fetch_array($result);
                if($row[message])
                {
                    echo"$row[message]";
                }
                else{
                    echo"상태메세지를 작성해주세요.";
                }
                ?>
            </h4>
         </div>
          <div id="profile_form2"></div>

            
            </div>  
         
         <script>
            $(function(){
                
              $("#join").click(function(){
                  $(".login_table").css("margin-top","-650");
                  
               
                });
                $("#join_back").click(function(){
                    $(".login_table").css("margin-top","750");
                });
                
            
              });
        </script>
     
             
                <form method="post" action="ss_login.php" class="login_table" id="lc">
                    <input type="text" name="login_id" id="login_id" placeholder="  User"required>
                    <input type="password" name="login_pass" id="login_pass" placeholder="  Password"required>
                    <input type="submit" value="시작하기" id="login_submit">
                   <input type="button" id="join" value="'blog berray'회원이 아니신가요?">
                </form>
             
          
         
        
       
            <form action="ss_join.php" method="post" id="test">                        
                    <p class="join2">이름</p><input type="text" name="join_name" class="join1"placeholder="  Name"><Br></Br>
                    <p class="join2">아이디</p><input type="text" name="join_id" placeholder="  ID" class="join1" required><Br></Br>
                    <p class="join2">비밀번호</p><input type="password" name="join_pass1" placeholder="  Password" class="join1" required><Br></Br>
                    <p class="join2">비밀번호확인</p><input type="password" name="join_pass2"placeholder="  Password confirm" required class="join1"><Br></Br>
                      <p class="join2">생년월일</p><input type="date" name="join_date" class="join1"><Br></Br>
                   <p class="join2">전화번호</p><input type="tel" name="join_tel" placeholder="  Tel" class="join1" required><Br></Br>              
                           <br><div id="join_back"><div class="glyphicon glyphicon-eject"></div></div><input type="submit" id="join_submit"value="회원가입">                 
                    
               </form> 
          
      </div>
       <?
        if($blog)
        {
           if($myinformation==1)
           {?>
           <div class="blog_main">     
               <form action="ss_change.php" method="post" enctype="multipart/form-data">                     
                    <fieldset id="one">
                        <legend>회원정보</legend>
                        <ul>
                    <?
                        include"member_database.php";
                        $sql="select * from ss_1 where id='$userid'";       
                        $result=mysql_query($sql,$connect);
                        $row=mysql_fetch_array($result);
                         
                    echo"<p class='join4'>프로필사진</p><input type='file' name='upfile[]' class='join3'><Br></Br>";
                    echo"<p class='join4'>이름</p><input type='text' name='join_name' class='join3' value='$row[name]' required><Br></Br>";
                    echo"<p class='join4'>별명</p><input type='text' name='join_nickname' class='join3' value=' $row[nickname]' required><Br></Br>";
                    echo"<p class='join4'>비밀번호</p><input type='password' name='join_pass1' class='join3' value='$row[password]'  required><Br></Br>";
                    echo"<p class='join4'>상태메세지</p><textarea name='join_message' class='join3' id='change_textarea' placeholder='  상태 message'>$row[message]</textarea><Br></Br>";
                        ?>
                </ul>
                <br><input type="submit" id="join_submit"value="변경">
            </fieldset>
           </form>   
           </div>
           <div class="right_bar"></div>
           <?
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
            else if($modifiedform==1)
            {?>
              <div class="blog_main">
                 <div class="modified_head">M O D I F I E D</div>
                  <div id="blogwrite_form"><br><br>
                <?
                echo"<form action='ss_modified1.php?count=$count' method='post'>";
                include "member_database.php";
                $sql="select * from ss_2 where count='$count'";
                $result=mysql_query($sql,$connect);
                $row=mysql_fetch_array($result);
                $count=$row[count];
                echo"<input type='text' id='write_title' name='title' value='$row[title]'>";
                echo"<textarea name='write' id='write_form' >$row[body]</textarea>";
               
                echo"<div class='file'>
               -사진은 수정이 불가능합니다.
           </div><input type='submit' id='modified_button' value='수정하기'>
         </form>";
         ?>
     </div>
              </div><div class="right_bar"></div><?
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
            else if($writeform==1)
            {?>
              <div class="blog_main">
                 <div class="modified_head">W R I T E</div>
                  <div id="blogwrite_form"><br><br>
                 <form action="ss_blog.php" method="post" enctype="multipart/form-data">
                   <input type="text" id="write_title" name="title" placeholder="제목을 입력해주세요(15자이내로 써주세요..)">
                   <textarea name="write" id="write_form" placeholder="글을 입력해주세요"></textarea>
                   <div id="file_form">
                       <input id="file" type="file" name="upfile[]">
                       <input id="file" type="file" name="upfile[]">
                       <input id="file" type="file" name="upfile[]">
                   </div>
                   <input type="submit" id="modified1_button" value="올리기">
             </form>
             </div>
              </div>  
              <div class="right_bar"></div><?
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
                        <?
                        $sql="select * from ss_2 where id='$userid'";
                        $result=mysql_query($sql,$connect);
                        if($result)
                            {
                                $num=0;
                                $row=mysql_num_rows($result);
                                $num=$row;

                                $sql="select * from ss_2 where id='$userid' order by count desc";
                                $result=mysql_query($sql);

                            while($row=mysql_fetch_array($result))
                            {
                                $count=$row[count];

                                $image_name[0]=$row[file_name_0];
                                $image_name[1]=$row[file_name_1];
                                $image_name[2]=$row[file_name_2];

                                $image_copied[0]=$row[file_copied_0];
                                $image_copied[1]=$row[file_copied_1];
                            $image_copied[2]=$row[file_copied_2];

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
                        <div class='panel-heading blog_head'> $row[title]<span class='blog_num'>$num 번째글</span></div>
                        <div class='panel-body' >
                        <p class='blog_name'>글쓴이:  $row[name] <br> 날짜:  $row[date]</p>

                        <div class='blog_body'>$row[body]<br>";
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
                        echo"</div></div>";   
                        echo"<div class='panel-footer'>
                        <button class='btn-more btn btn-sm btn-primary'><span class='glyphicon glyphicon-chevron-down'></span>  더보기</button>
                        <button class='btn btn-sm btn-success'><a href='ss_modified.php?count=$count' class='glyphicon glyphicon-edit' id='modified'>수정</a></button>
                        <button class='btn btn-sm btn-danger'><a href='ss_delete.php?count=$count'class='glyphicon glyphicon-trash' id='delete'>삭제</a></button></div></div>";
                                
                            }
                        }
                        ?>
                
            </div>
            <div class="right_bar"></div>

            <?
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
        }
        else{
             echo"<script>
            $(function(){
                $('#login_table').css('margin-top','-1000px');
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
            $(function(){
                
              $("#join").click(function(){
                  $("#login_table").css("margin-top","-900");
                  
                 
                });
                $("#join_back").click(function(){
                    $("#login_table").css("margin-bottom","-450");
                });
              });
       
          </script>
          <script src="app.js"></script>
          </div>
    </body>
</html>
