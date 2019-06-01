<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/9
 * Time: 15:16
 */

namespace app\admin\controller;


use think\Controller;

/**
 * 后台基础类库
 * Class Base
 * @package app\admin\controller
 */
class Base extends Controller
{
    //初始化方法
    public function _initialize()
    {
       $isLogin=$this->isLogin();
       if(!$isLogin){
            return $this->error("必须登录才能访问",'login/index');
       }
    }

    /**
     * 判断是否登录
     * @return bool
     */
    public function isLogin(){

        $user=session(config("session.session_user"));
        if($user==NULL){
            return FALSE;
        }ELSE{
            RETURN TRUE;
        }

    }

}