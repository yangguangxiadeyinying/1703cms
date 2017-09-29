<?php
$aid=$_GET["aid"];
include "../public/db.php";
if($db->exec("delete from admin where aid=".$aid)){
    echo "<script>alert('删除成功');location.href='showUser.php';</script>";
}
