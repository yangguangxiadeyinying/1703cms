<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["aname"]);

echo "<script>alert('退出成功');location.href='login.php'</script>";
