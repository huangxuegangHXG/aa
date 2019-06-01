<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/24
 * Time: 16:58
 */

namespace app\api\controller;


use app\common\lib\exception\ApiException;
use think\Controller;
use think\Exception;

class Test extends Common
{
    public function index(){

        return [
            'sgsgsg',
            'aaaaaaaaaaaaa'
        ];
    }
    public function update($id=0){
        $id=input('put.');
        halt($id);
    }
    public function save(){
        $data=input('post.');
        if($data['name']!=1){
            throw new ApiException('数据不合法',403);
        }

        return show(1,'OK',input('post.'),200);
    }

}