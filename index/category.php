<?php
include "../public/header.php";
?>

<style>
    .container{
        width:800px;height:auto;
        overflow: hidden;
        margin:auto;
    }
    .lists{
        float:left;width:190px;height:190px;
        border:1px solid #ccc;
        margin:4px;
    }
</style>
  <div class="container">
      <?php
        include "../public/db.php";
        $sql="select * from category where pid=".$_GET["cid"];
        $result=$db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row=$result->fetch()) {
             if($row["state"]==0){
                 $url="lists.php";
             }else{
                 $url="category.php";
             }
            ?>
            <div class="lists">
                <a href="<?php echo $url?>?cid=<?php echo $row['cid']?>">
                   <?php
                    echo $row["cname"]
                   ?>
                </a>
            </div>
            <?php
        }
      ?>
  </div>
</body>
</html>
