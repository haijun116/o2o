<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午4:18
 */
namespace app\bis\controller;
use think\Controller;

class Register extends Controller
{
    public function index(){

        //调用城市一级城市数据
        $citys = Model('City')->getNormalCityByParentId();
        //调用分类数据
        $categorys = Model('Category')->getNormalCategoryCByParentId();
        return $this->fetch('',[
            'citys'     => $citys,
            'categorys' =>$categorys
        ]);
    }
}