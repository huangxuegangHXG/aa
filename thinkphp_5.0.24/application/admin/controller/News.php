<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/9
 * Time: 15:44
 */

namespace app\admin\controller;


/**
 * Class News娱乐新闻管理
 * @package app\admin\controller
 */
class News extends Base
{
    public function newslist(){
       $res= model("news")->getnews();
        return $this->fetch('',['list'=>$res]);
    }
    public function add(){
        if(request()->isPost()){
            $data=input('post.');

        }
        return $this->fetch('',['cats'=>config('cat.lists')]);
    }
    public function newsadd(){
       $data=input("post.");
       $file=request()->file("image");
       $info=$file->move('uploads');
       $saveName=$info->getSaveName();
       //文件路径入库
       $image='uploads/'.$saveName;
        $data['image']=$image;

       $res=model("News")->add($data);
       if($res){
           return $this->success("新闻添加成功",'index/index');
       }


    }
}