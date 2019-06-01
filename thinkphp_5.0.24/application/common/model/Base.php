<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/10
 * Time: 17:31
 */

namespace app\common\model;


use think\Model;

class Base extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data){
        if(!is_array($data)){
            exception("数据不合法");
        }
        $this->allowField(true)->save($data);
        return $this->id;

    }

}