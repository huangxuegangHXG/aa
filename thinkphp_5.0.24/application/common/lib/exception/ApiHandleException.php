<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/24
 * Time: 19:58
 */

namespace app\common\lib\exception;


use Exception;
use think\exception\Handle;

class ApiHandleException extends Handle
{
    public  $httpCode=500;
    public function render(Exception $e)
    {
        if(config('app_debug')==true){
            return parent::render($e);

        }
        if($e instanceof ApiException){
            $this->httpCode=$e->httpCode;
        }
        return show(0,$e->getMessage(),[],$this->httpCode);

    }

}