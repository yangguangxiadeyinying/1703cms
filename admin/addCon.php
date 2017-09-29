<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addConCon.php">
    所属分类:
    <select name="cid" >
        <option value="0">一级分类</option>
        <?php
        include "../libs/tree.class.php";
        include "../public/db.php";
        $treeobj=new tree();
        $treeobj->getTree(0,$db,"category",0,"-");
        echo ($treeobj->str);
        ?>
    </select><br>
    内容标题: <input type="text" name="stitle"><br>
    内容: <textarea name="scon"  cols="30" rows="10">

    </textarea><br>
    <input type="submit" value="添加">
</form>
</body>
</html>