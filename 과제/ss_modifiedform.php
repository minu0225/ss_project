<!DOCTYPE html>
<html lang="en">
<head>
   <link type="text/css" rel="stylesheet" href="asdas1.css"/>
    <meta charset="UTF-8">
</head>
<body background="그라데이션06.png" id="picture" >
  <div id="blogwrap">
    <p id="header">M O D I F Y</p>
     <div id="blogwrite_form">
        <?
         echo"<form action='ss_modified.php?count=$count' method='post'>";
             ?>
          <input type="button" id="back_button" onclick="location.href='ss_blogform.php'" value="돌아가기">
           <input type="submit" id="submit_button" value="수정하기">
           <?
             include "member_database.php";
             $sql="select * from ss_2 where count='$count'";
             $result=mysql_query($sql,$connect);
             $row=mysql_fetch_array($result);
             $count=$row[count];
           echo"<input type='text' id='write_title' name='title' value='$row[title]'>";
           echo"<textarea name='write' id='write_form' >$row[body]</textarea>";
               
           echo"<div class='file'>
               -사진은 수정이 불가능합니다.
           </div>
         </form>";
         ?>
     </div>
  </div>
</body>
</html>