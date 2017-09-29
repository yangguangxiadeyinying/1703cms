<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["login"])){
    echo "<script>alert('请登录');location.href='login.php'</script>";
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
    <link rel="stylesheet" href="http://localhost/1703/1703cms/static/css/bootstrap.css">
    <style>
        html,body{
            width:100%;height:100%;
            overflow: hidden;
        }
        .container.header{
            height:20%;
            border: 1px solid #777;

        }
        .container.header h1{
            text-align: center;
        }
        .con{
            height:80%;border:1px solid #777;
            border-top:none;
        }
        .con .row{
            height:100%;
        }
        div[class*=col]{
            height:100%;

            /*

              库 (uf8)->  表  ->  字段
            */

        }
        .left{
            border-right:1px solid #777;

        }
        iframe{
            padding:0;margin:0;width:100%;
            height:100%;
        }

         h1{
             overflow: hidden;
             width:100%;

         }

        .header h1 .welcome{
            float:left;
            margin-left:10px;
        }
        .myphoto{
            width:50px;height:50px;
            border:1px solid #ccc;
            border-radius: 50%;
            float: right;
            margin-right:10px;
        }
        .aname{
            transition: opacity .5s ease;
            opacity: 0;
        }
        .myphoto:hover+.aname{
          opacity: 1;
        }
    </style>
    <script>

    </script>

</head>
<body>
   <?php
     include "../public/db.php";
     $aid=$_SESSION["aid"];
     $sql="select * from admin where aid=".$aid;
     $result=$db->query($sql);

     $result->setFetchMode(PDO::FETCH_ASSOC);
     $row=$result->fetch();

     $url=explode(";",$row["aphoto"]);
     $url=$url[0];
   ?>
   <div class="container header">
           <h1>
              <span class="welcome"> 欢迎来到cms</span>
               <span class="myphoto" style="background-image: url(<?php echo $url?>);background-size: cover;">
               </span>
               <span class="aname">
                   <?php echo $row['aname']?>
               </span>
           </h1>
       <a href="logout.php">安全退出</a>
       <a href="../index/index.php" target="_blank">查看首页</a>
   </div>
   <div class="container con">
       <div class="row">
           <div class="col-xs-4 left col-sm-3">
              <ul>
                  <li class="opts">
                      <span>管理员信息</span>

                      <ul class="son">
                          <li>
                              <a href="showUser.php" target="right"> 查看管理员</a>
                          </li>
                          <li>
 <a href="addUser.php" target="right">添加管理员</a>
                          </li>
                      </ul>

                  </li>

                  <li class="opts">
                      <span>分类管理</span>

                      <ul class="son">
                          <li>
                              <a href="showCategory.php" target="right">查看分类</a>

                          </li>
                          <li>
                              <a href="addCategory.php" target="right">添加分类</a>
                          </li>
                      </ul>

                  </li>

                  <li class="opts">
                      <span>内容管理</span>

                      <ul class="son">
                          <li>查看内容</li>
                          <li>
                              <a href="addCon.php" target="right">
                                  添加内容
                              </a>
                          </li>
                      </ul>

                  </li>
              </ul>

           </div>
           <div class="col-xs-8 col-sm-9 right">

               <iframe src="" frameborder="0" name="right"></iframe>
           </div>
       </div>
   </div>
</body>
</html>