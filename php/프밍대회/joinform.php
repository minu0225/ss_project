<?php
    session_start();
?>
<meta charset="UTF-8">
<?php
    
    $join=1;
    $_SESSION['join']=$join;
echo"<script>location.href='index.php'</script>";
?>