<?php
class upload{
    public $size;
    public $type="image/png;image/jpeg;image/gif";
    public $filename="file";
    private $data;
    public $uploadRoot="abc";
    private $fullpath;

    function __construct(){
        $this->size=1024*1024*10;
    }

    private function accept(){
        $this->data=$_FILES[$this->filename];
    }

    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if($this->data["size"]<$this->size&&strrchr($this->type,$this->data["type"])){
                return true;
            }
        }

        return false;
    }

    private function createDir(){
        $dir=date("y-m-d");
        if(!is_dir($this->uploadRoot."/".$dir)){
            mkdir($this->uploadRoot."/".$dir,0777,true);
        }
        //3.  创建文件的名字

        $name=time().mt_rand(0,10000).$this->data["name"];

        //4. 完成路径
        $this->fullpath=$this->uploadRoot."/".$dir."/".$name;

    }

    public function filemove(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }

    public function move(){
        //1. 接收
        $this->accept();
        //2. 检查
        if($this->check()){
            //3. 创建目录
            $this->createDir();
            //4. 移动到指定的目录
            $this->filemove();
            echo $this->fullpath;

        }else{
            echo "error";
        }
    }
}









