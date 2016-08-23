<?   

    $connect=mysql_connect("localhost","junho","2343");
    mysql_select_db("junho_db",$connect);

    if($mode=="insert")
    {
        $sum=$sub1+$sub2+$sub3+$sub4+$sub5;
        $avg=$sum/5;
        
        $sql="insert into stud_score (name,sub1,sub2,sub3,sub4,sub5,sum,avg) values";
        $sql.="('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$sum,$avg)";
        
        $result=mysql_query($sql,$connect);
    }
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<h3>성적입력하세요</h3>
<form action="index.php?mode=insert" method='post'>
    <table width="800" border="1" cellpadding="5">
    <tr><td> 이름 : <input type="text" size="5" name="name">&nbsp;
        과목1 : <input type="text" size="2" name="sub1">
        과목2 : <input type="text" size="2" name="sub2">
        과목3 : <input type="text" size="2" name="sub3">
        과목4 : <input type="text" size="2" name="sub4">
        과목5 : <input type="text" size="2" name="sub5">
    </td>
    <td align="center">
        <input type="submit" value="입력하기">
    </td>
    </tr>
    </table>
</form>
<p>
    <h3>2) 성적 출력 하기</h3>
    <p><a href="index.php?mode=big_first">[성적순 정렬]</a>
    <a href="index.php?mode=small_first">[성적역순 정렬]</a></p>
<p>

<table width="720" border="1" cellpadding="5">
    <tr align="center" bgcolor="#eeeeee">
        <td>번호</td>
        <td>이름</td>
        <td>과목1</td>
        <td>과목2</td>
        <td>과목3</td>
        <td>과목4</td>
        <td>과목5</td>
        <td>합계</td>
        <td>평균</td>
        <td>&nbsp;</td>
    </tr>
<?
    if($mode=="big_first")
        $sql="select * from stud_score order by sum desc";
    else if($mode=="small_first")
        $sql="select * from stud_score order by sum";
    else
        $sql="select * from stud_score";
    
    $result=mysql_query($sql);
    
    $count=1;
    
    while($row=mysql_fetch_array($result))
    {
        $avg=round($row[avg],1);
        $num=$row[num];
        
        echo("<tr align='center'>
        <td>$count</td>
        <td>$row[name]</td>
        <td>$row[sub1]</td>
        <td>$row[sub2]</td>
        <td>$row[sub3]</td>
        <td>$row[sub4]</td>
        <td>$row[sub5]</td>
        <td>$row[sum]</td>
        <td>$avg</td>
        <td><a href='junho_delete.php?num=$num'>[삭제]</a></td>
        </tr>");
        
        $count++;
    }
    mysql_close();
?>
</table>
