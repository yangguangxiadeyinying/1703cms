<?php
$cid=$_GET["cid"];
$stitle=$_GET["stitle"];
$scon=$_GET["scon"];
include "../public/db.php";
$sql="insert into shows (stitle,scon,cid) values ('{$stitle}','{$scon}',$cid)";
if($db->exec($sql)){
    echo "<script>alert('添加成功');location.href='addCon.php';</script>";
}