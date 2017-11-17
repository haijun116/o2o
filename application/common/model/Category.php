<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午6:21
 */

namespace app\common\model;


use think\Model;

class Category extends Model
{

    public function getNormalCategoryCByParentId($pid=0){

        $data = [
            'status'    =>1,
            'parent_id' =>$pid
        ];
        $order = [
            'id'=>'desc'
        ];
        return $this->where($data)->order($order)->select();
    }
}