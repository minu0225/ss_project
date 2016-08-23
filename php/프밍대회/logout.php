<?
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['join']);
    unset($_SESSION['login']);
    echo"<script>location.href='index.php'</script>";
?>