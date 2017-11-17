<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午4:33
 */

namespace app\common\model;


use think\Model;

class City extends Model
{

    public function getNormalCityByParentId($pid=0){

        $data = [
            'status'    =>1,
            'parent_id' =>$pid
        ];

        $order = [
            'id' => 'desc'
        ];
        return $this->where($data)->order($order)->select();
    }
}