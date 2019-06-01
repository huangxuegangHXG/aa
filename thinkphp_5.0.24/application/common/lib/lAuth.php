<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/9
 * Time: 9:57
 */
namespace app\common\lib;
class IAuth
{
    /**
     * @param string $data
     * @return string
     */
public  static function setPassword($data){
        return md5($data);
    }

}