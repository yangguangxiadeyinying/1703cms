<?php
session_start();
header("content-type:text/html;charset=utf-8");
$aname=htmlspecialchars(addslashes($_POST["aname"]));

$apass=md5($_POST["apass"]);

$sql="select * from admin where aname='{$aname}' and apass='{$apass}'";

include  "../public/db.php";
$result=$db->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$row=$result->fetch();
if($result->rowCount()>0){
$_SESSION["login"]="yes";
$_SESSION["aname"]=$aname;
$_SESSION["aid"]=$row["aid"];

echo "<script>alert('登陆成功');location.href='index.php';</script>";

}else{
    echo "<script>alert('登陆失败');location.href='login.php';</script>";
}

