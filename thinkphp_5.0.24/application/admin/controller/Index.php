<?php
namespace app\admin\controller;

use think\Controller;

class index extends Base
{
    public function index()
    {
//        halt(session(config("session.session_user")));
        return $this->fetch();
    }
    public function welcome(){
        echo "welcome";
    }
}
