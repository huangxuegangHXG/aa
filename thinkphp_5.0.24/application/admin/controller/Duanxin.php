<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/31
 * Time: 20:58
 */

namespace app\admin\controller;


use extend\ali\aliduanxin\api_demo\SmsDemo;
use think\Controller;

class Duanxin extends SmsDemo
{
    public function form(){
        return $this->fetch();
    }
    public function send(){}

}