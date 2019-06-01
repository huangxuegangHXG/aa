<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/7
 * Time: 10:10
 */

namespace app\common\validate;


use think\Validate;

class AdminUser extends Validate
{
    protected $rule=[
        'username'=>'require|max:20',
        'password'=>'require|max:20',

    ];

}