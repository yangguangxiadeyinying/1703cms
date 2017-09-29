<?php
header("content-type:text/html;charset=utf-8");
include "../public/db.php";
$aid=$_GET["aid"];
$aname=addslashes(htmlspecialchars($_POST["aname"]));
$apass=$_POST["apass"];
$anicheng=$_POST["anicheng"];
$aphoto=$_POST["aphoto"];

if($apass){
    $apass=md5($apass);
    $sql="update admin set aname='{$aname}',apass='{$apass}',aphoto='{$aphoto}' where aid=".$aid;
}else{
    $sql="update admin set aname='{$aname}',aphoto='{$aphoto}' where aid=".$aid;
}


   if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='addUser.php';</script>";
   }
