<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>HTML - 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="asdas1.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
</head>
<body>
	<div id="blogform_wrap">
		<header>
		<img src="food.jpg" alt="">
		<h1>Welocm To Blog Barray</h1>
		</header>
		<nav>
				<ul>
					<li><a href="">menu-1</a></li>
					<li><a href="">menu-2</a></li>
					<li><a href="">menu-3</a></li>
					<li><a href="">menu-4</a></li>
					<li><a href="">menu-5</a></li>
				</ul>
			</nav>
			<div class="contents">
				<div class="left">
					<div>
		            				<div id="profile_form">
    <div id="profile_form1"  class='panel panel-info'>
       <div id="strong">프로필 사진</div>
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
						
					</div>
				</div>
				<div class="right">
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
                    <div class='panel-heading'> $num 번째글<br>
                    $row[title]
                    $row[date]
                    $row[name]<br><br></div>
                    <div class='panel-body'>$row[body]<br></div>";
                    $num--;
                    for($i=0; $i<3; $i++)
                    {
                        if($image_copied[$i])
                        {
                            $img_name=$image_copied[$i];
                            $img_name="./data/".$img_name;
                            $img_width=$image_width[$i];
                            
                            echo"<img src='$img_name' width='$img_width'id='img'><br><br>";
                        }
                    }
                    echo"<div class='panel-footer'>
                    <button class='btn btn-sm btn-success'><a href='ss_modifiedform.php?count=$count' class='glyphicon glyphicon-edit' id='modified'>수정</a></button>
				    <button class='btn btn-sm btn-danger'><a href='ss_delete.php?count=$count'class='glyphicon glyphicon-trash' id='delete'>삭제</a></button></div></div>";
                        }
                    }
                    ?>
				
				</div>
			</div>
			<footer>
				Coptright &copy; 2016 문준호 All rights reserved.
			</footer>
	</div>
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
</body>
</html>