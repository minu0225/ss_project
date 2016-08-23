<?
    session_start();
    unset($_SESSION['userid']);
    unset($_SESSION['userpass']);
    unset($_SESSION['username']);
    unset($_SESSION['usertel']);

    echo"<script>location.href='index.php';</script>";
?>