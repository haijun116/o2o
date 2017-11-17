<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午5:07
 */

namespace app\api\controller;
use think\Controller;

class City extends Controller
{
    private $obj;
    public function _initialize()
    {
        $this->obj = model('City');
    }

    public function getCitysByParentId(){

        $id = input('post.id');

        if(!$id){
            $this->error('id值不合法');
        }

        $citys =  $this->obj->getNormalCityByParentId($id);

        if($citys){

            return show('1','success',$citys);
        }else{
            return show('0','error');
        }
    }
}