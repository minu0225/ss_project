<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link type="text/css" rel="stylesheet" href="asdas1.css"/>
    <meta charset="UTF-8">
    <title>블로그</title>
</head>
<?
    include"member_database.php";
    $sql="select * from ss_1 where id='$userid'";
    $result=mysql_query($sql,$connect);
    $row=mysql_fetch_array($result);
    if(!$row[picture])
    {
        echo"<body background='그라데이션03.png' id='picture'>";
    }
    else{
        echo"<body background='그라데이션0$row[picture].png' id='picture'>";
    }
?>
  <div id="blogwrap">
      <p id="header"><span class="one"><?
          $sql="select * from ss_1 where id='$userid'";
          $result=mysql_query($sql,$connect);
          $row=mysql_fetch_array($result);
          
          echo"$row[nickname]   ";
          ?>
    <div id="profile_form">
    <div id="profile_form1">
       <div id="strong">프로필 사진</div>
        <div id="profile_image">
          <?
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
                            
                            echo"<img src='$img_name' width='$img_width' id='img'></td>";
                        }
                    }
            }
            else{
                echo"프로필에서 사진을 작성해주세요.";
            }
            
            ?>
        </div>
        <div id="strong">blog name</div>
        <div id="profile_nickname">
            <?
            $sql="select * from ss_1 where id='$userid'";
            $result=mysql_query($sql,$connect);
            $row=mysql_fetch_array($result);
                echo"$row[nickname]";
            ?>
        </div>
        <div id="strong">상태 메세지</div>
        <div id="profile_text">
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
        </div>
     </div>
       <div id="profile_form2">
        <input type="button" id="logout_button"onclick="logout_button()" value="로그아웃">
        <input type="button" id="change_button"onclick="change_button()" value="프로필">
        </div>
        </div>  
      <div id="blog_background">
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
                    
                    echo"<table id='background'>
                    <tr><td> $num 번째글<br></td></tr>
                    <tr><td id='table_title'>$row[title]<br></td>
                    <td>
                    <a href='ss_modifiedform.php?count=$count' id='modified'>수정</a>
                    <br><a href='ss_delete.php?count=$count' id='delete'>삭제</a></td></tr>
                    <tr><td id='table_data'>$row[date]<br></td></tr>
                    <tr><td id='table_name'>$row[name]<br><br></td></tr>
                    <tr><td id='table_body'>$row[body]<br></td></tr>
                    ";
                    $num--;
                    for($i=0; $i<3; $i++)
                    {
                        if($image_copied[$i])
                        {
                            $img_name=$image_copied[$i];
                            $img_name="./data/".$img_name;
                            $img_width=$image_width[$i];
                            
                            echo"<tr><td colspan='2'><img src='$img_name' width='$img_width'id='img'>.<br><br></td>";
                        }
                    }
                    echo"</table><br>";
                }
                }
               else{
                   echo"없다";
               }
            ?>

        <script>
            function write_button()
            {
                location.href="ss_blogwrite.php";
            }
            function logout_button()
            {
                alert("로그아웃이 정상적으로 처리되었습니다.");
                location.href="ss_logout.php";
            }
            function change_button()
            {
                location.href="ss_passwordform.php";
            }
      </script>
      </div>
      <div id="neighbor">
      <h3>이웃 블로그</h3>
        <div id="neighbor_list">
            <?
            include "member_database.php";
            $sql = "select * from ss_1";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                if($row[id]!=$userid)
                echo"$row[name] 의 블로그<br>";
            }
            ?>
        </div>
      </div>
  </div>
</body>
</html>
   