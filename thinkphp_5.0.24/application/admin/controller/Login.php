<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/7
 * Time: 14:18
 */

namespace app\admin\controller;

use think\Controller;
use  app\common\lib\Ipassword;
class Login extends Base
{
    /**
     * 覆盖base里面的方法要不进入死循环
     */
    public function _initialize()
    {}
    public function index(){
        //如果后台已经登录了直接跳转到首页

        if($this->isLogin()){
            return $this->success("您已经登录",'index/index');
        }
        return $this->fetch();

    }

    /**
     * @throws 登录功能
     */
    public function check()
    {
        if (request()->isPost()) {
            $data = input('post.');
//            if (!captcha_check($data['code'])) {
//                $this->error("验证码不正确");
//            }
            $user=model("AdminUser")->get(['username'=>$data['username']]);
            if(!$user||$user->status!=config('code.status_normal')){
                $this->error("该用户不存在");
            }
            if(Ipassword::setPassword($data['password'])!=$user['password']){
                $this->error("密码不正确");
            }else{
                //  登录成功之后更新数据库,把用户信息存储到session中
                $data1=[
                'last_login_time'=>time(),
                'last_login_ip'=>request()->ip()
                ];
                model("AdminUser")->save($data1,['id'=>$user['id']]);
               session(config('session.session_user'),$user);
                $this->success("登录成功","index/index");
            }
        }else{
            $this->error("请求不合法");
        }
    }
    public function logout(){
        session(config('session.session_user'),null);
        $this->redirect("login/index");
    }

}