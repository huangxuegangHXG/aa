<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/7
 * Time: 9:32
 */
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $validate=validate('AdminUser');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $data['password']=md5($data['password']);
            $data['status']=1;
            try{
                $id=model('AdminUser')->add($data);
            }catch (\Exception $e){
                echo $e->getMessage();
            }
            if($id){
                $this->success("新用户插入成功");
            }
        }else{
            return $this->fetch();
        }
    }


}