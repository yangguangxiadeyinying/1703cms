<?php
$cid=$_GET["cid"];
include "../public/db.php";
include "../libs/tree.class.php";
$obj=new tree();
$obj->del($cid,$db,"category");
