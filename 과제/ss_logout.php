<?
    session_start();
?>
  <meta charset="utf-8">
<?
    unset($_SESSION['userid']);
    unset($_SESSION['userpass']);
    unset($_SESSION['username']);
    unset($_SESSION['usertel']);
    unset($_SESSION['usernickname']);
    unset($_SESSION['writeform']);
    unset($_SESSION['blog']);
    unset($_SESSION['myinformation']);
    unset($_SESSION['modifiedform']);

    echo"<script>location.href='index.php';</script>";
?>