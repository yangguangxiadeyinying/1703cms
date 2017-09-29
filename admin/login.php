<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["login"])){
    echo "<script>alert('已登录');location.href='index.php'</script>";
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/1703/1703cms/static/css/bootstrap.min.css">
    <style>
        form{
            width:300px;height:300px;
            border:1px solid #ccc;
            border-radius: 5px;
            padding:10px;position: fixed;
            left:0;top:0;right:0;bottom: 0;margin:auto;
        }
        h3{
            text-align: center;
        }
    </style>
    <script src="http://localhost/1703/1703cms/static/js/jquery-3.1.1.js"></script>
    <script src="http://localhost/1703/1703cms/static/js/jquery.validate.js"></script>
    <script>
        $(function(){
            $("form").validate({
                rules:{
                    aname:{
                        required:true,
                        minlength:2
                    }
                },
                messages:{
                    aname:{
                        required:"用户名必填",
                        minlength:"不能少于2位"
                    }
                }
            })
        })
    </script>
</head>
<body>

<form action="checkLogin.php" method="post">
    <h3>登录页面</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="user" name="aname">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="apass">
    </div>
    <button type="submit" class="btn btn-default">登陆</button>
</form>

</body>
</html>