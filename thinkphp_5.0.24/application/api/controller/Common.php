<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/26
 * Time: 19:45
 */

namespace app\api\controller;


use think\Controller;

/**
 * Class Common
 * api模块公共的数据
 * @package app\api\controller
 */
class Common extends Controller
{
    public function _initialize()
    {
        $this->checkRequestAuth();
    }

    /**
     * 检查每次app请求的数据是否合法
     */
    public function checkRequestAuth(){
    $header=request()->header();
    halt($header);
    }

}