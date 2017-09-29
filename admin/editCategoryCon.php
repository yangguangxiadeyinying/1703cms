<?php
$cid=$_GET["cid"];
$pid=$_GET["pid"];
$cname=$_GET["cname"];
include  "../public/db.php";
$sql="update category set pid={$pid},cname='{$cname}' where cid=".$cid;
if($db->exec($sql)){
    echo "<script>alert('修改成功');location.href='showCategory.php'</script>";
}