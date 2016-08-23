<?php
    session_start();
?>
<meta charset="UTF-8">
<?php
    
    $join=0;
    $_SESSION['join']=$join;
echo"<script>location.href='index.php'</script>";
?>