<!DOCTYPE html>
<html lang="en">
<head>
   <link type="text/css" rel="stylesheet" href="asdas1.css"/>
    <meta charset="UTF-8">
    <title>글쓰기</title>
</head>
<body background="그라데이션01.png" id="picture" >
  <div id="blogwrap">
    <p id="header">P O S T I N G</p>
     <div id="blogwrite_form">
         <form action="ss_blog.php" method="post" enctype="multipart/form-data">
          <input type="button" id="back_button" onclick="location.href='ss_blogform.php'" value="돌아가기">
           <input type="submit" id="submit_button" value="올리기">
           <input type="text" id="write_title" name="title" placeholder="제목을 입력해주세요(15자이내로 써주세요..)">
           <textarea name="write" id="write_form" placeholder="글을 입력해주세요"></textarea>
           <div id="file_form">
               <input id="file" type="file" name="upfile[]">
               <input id="file" type="file" name="upfile[]">
               <input id="file" type="file" name="upfile[]">
           </div>
         </form>
     </div>
  </div>
</body>
</html>