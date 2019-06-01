<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/9
 * Time: 10:28
 */

namespace app\common\lib;


class Ipassword
{
    /**
     * @param string $data
     * @return string
     */
    public  static function setPassword($data){
        return md5($data);
    }

}