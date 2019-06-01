<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/24
 * Time: 20:11
 */

namespace app\common\lib\exception;


use think\Exception;
use Throwable;

class ApiException extends Exception
{
    public $message='';
    public $httpCode=500;
    public $code=0;
    public function __construct($message = "", $httpCode=0,$code = 0)
    {
        $this->httpCode=$httpCode;
        $this->message=$message;
        $this->code=$code;
    }

}