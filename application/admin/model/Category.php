<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-15
 * Time: 下午9:07
 */
namespace app\admin\model;
use think\Model;

class Category extends Model
{
    protected $autoWriteTimestamp = true;

    public function add($data){

        $data['status'] = 1;
        return $this->save($data);
    }


    //获取一级分类信息
    public function getNormalFirstCategory(){
        $data = [
            'status' => 1,
            'parent_id' =>0
        ];
        $order = [
            'id' => 'desc'
        ];
        return $this->where($data)->order($order)->select();
    }

    //获取展示页的一级分类

    public function getFirstCategorys($pid = 0){
        $data = [
            'status' => ['neq',-1],
            'parent_id' =>$pid
        ];
        $order = [
            'listorder'=>'desc',
            'id'=>'desc'
        ];
        return $this->where($data)->order($order)->paginate();
    }

}