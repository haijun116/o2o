<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午7:45
 */

namespace app\api\controller;


use think\Controller;

class Category extends Controller
{
    private $obj;
    public function _initialize()
    {
        $this->obj = Model('Category');
    }

    public function getCategoryByParentId(){
        $id = input('post.id');
        if(!$id){
            $this->error('id值不合法');
        }

        $categories =  $this->obj->getNormalCategoryCByParentId($id);

        if($categories){

            return show('1','success',$categories);
        }else{
            return show('0','error');
        }
    }
}