<?php
/**
 * Created by PhpStorm.
 * User: 74346
 * Date: 2019/5/10
 * Time: 12:01
 */

namespace app\common\model;


use think\Model;

class News extends Base
{
    /**
     * 获取新闻
     * @var array
     */
    protected $autoWriteTimestamp=true;
    public function getnews(){
        $data['status']=1;
        $result=$this->paginate(5);
        return $result;
    }


}